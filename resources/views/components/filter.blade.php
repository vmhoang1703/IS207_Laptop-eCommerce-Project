<div>
    <!-- filter -->
    <div class="filter">
        <table class="filter-content">
            <tr>
                <td>
                    <a class="filtertext">Filter</a>
                </td>
            </tr>
            <tr>
                <td id="min-max">
                    <label for="price" style="font-size:12px">Price</label><br />
                    <input type="range" id="vol" name="vol" min="0" max="100">
                    <datalist id="values">
                        <option value="0" label="lowest"></option>
                        <option value="100" label="highest" id="highest"></option>
                    </datalist>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="cat_link"><a>Categories</a></div>
                    <ul class="menu-bar">
                        <li class="filter-item">Laptop</li>
                        <li class="li-hr">
                            <hr>
                        </li>
                        <li>
                            <div class="drop-down filter-item">
                                <span>Accessories</span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                            <ul class="menu-bar-1">
                                <li>Power banks </li>
                                <li>Cables, chargers </li>
                                <li>Phone cases </li>
                                <li>Speakers </li>
                                <li>Headphones </li>
                            </ul>
                        </li>
                        <li class="li-hr">
                            <hr>
                        </li>
                        <li>
                            <div class="drop-down filter-item">
                                <span>PCs, printer, screens</span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                            <ul class="menu-bar-1">
                                <li>Printers </li>
                                <li>Printer ink </li>
                                <li>Monitor </li>
                                <li>Gaming PC </li>

                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
    <script src="{{ asset('js/dropdown.js') }}"></script>
</div>