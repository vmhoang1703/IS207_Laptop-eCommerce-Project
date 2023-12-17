<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersManagementController extends Controller
{
    // Controller for users management
    public function showCustomersManagementPage(): View
    {
        $customerUsers = User::where('role', 'customer')->get();

        return view('admin.user.customers', compact('customerUsers'));
    }

    public function showEmployeesManagementPage(): View
    {
        $employeeUsers = User::whereIn('role', ['employee', 'moderator'])->get();

        return view('admin.user.employees', compact('employeeUsers'));
    }

    public function createEmployeePage(): View
    {
        return view('admin.user.employee_create');
    }

    public function storeEmployee(Request $request)
    {
        // Đánh giá và kiểm tra form
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required',
            'role' => 'required|in:customer,admin,employee,moderator',
            'date_of_birth' => 'required|date',
            'address' => 'required',
            'department' => 'required',
            'position' => 'required',
            'salary' => 'required|numeric',
            'hire_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect(route('register.show'))
                ->withErrors($validator)
                ->withInput();
        }

        try {
            do {
                $user_id = $this->generateUserId();
            } while (User::where('user_id', $user_id)->exists());

            // Tạo một đối tượng Employee với dữ liệu từ form
            $employee = new User([
                'user_id' => $user_id,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'phone' => $request->input('phone'),
                'role' => $request->input('role'),
                'date_of_birth' => $request->input('date_of_birth'),
                'address' => $request->input('address'),
                'department' => $request->input('department'),
                'position' => $request->input('position'),
                'salary' => $request->input('salary'),
                'hire_date' => $request->input('hire_date'),
            ]);

            $employee->save();

            // Điều hướng đến trang quản lý nhân viên và gửi thông báo thành công
            return redirect()->route('employees.management')->with('success', 'Employee created successfully');
        } catch (\Exception $e) {
            // Nếu có lỗi, quay trở lại form với thông báo lỗi
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function viewCustomerPage($id)
    {
        $customer = User::find($id);
        return view('admin.user.customer_view', compact('customer'));
    }

    public function viewEmployeePage($id)
    {
        $employee = User::find($id);
        return view('admin.user.employee_view', compact('employee'));
    }

    public function editEmployeePage($id)
    {
        $employee = User::find($id);
        return view('admin.user.employee_edit', compact('employee'));
    }

    public function updateEmployee(Request $request, $id)
    {
        $employee = User::find($id);
        $employee->update($request->all());

        return redirect()->route('employees.management')->with('success', 'Category updated successfully!');
    }

    public function deleteEmployee($id)
    {
        $employee = User::find($id);
        $employee->delete();

        // Redirect về trang quản lý sản phẩm với thông báo thành công
        return redirect()->route('employees.management')->with('success', 'Category deleted successfully');
    }

    private function generateUserId(): string
    {
        // Tạo một chuỗi ngẫu nhiên có chiều dài 6 kí tự (bao gồm số, chữ, kí tự đặc biệt)
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $user_id = '';
        for ($i = 0; $i < 6; $i++) {
            $user_id .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $user_id;
    }
}
