<ul class="carousel ">
    @component('components.card')
    @endcomponent
    @component('components.card')
    @endcomponent
    @component('components.card')
    @endcomponent
    @component('components.card')
    @endcomponent
    <!-- heart action -->
    <script>
        document.querySelectorAll(".heart").forEach(item =>
            item.addEventListener('click', function() {
                if (this.style.color != "red")
                    this.style.color = "red"
                else
                    this.style.color = "black"
            })
        )
    </script>
    <!-- ----------------------------------------- -->
</ul>