<div class="text-center d-none d-md-inline">

    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" style="display:none; padding: 1%"
        id="control-sidebar">
        <br>
        <button onclick="w3_close()" class="btn btn-xs btn-secondary" style="margin-bottom: 10px">
            Kembali
        </button>
        <br>
        <div class="text-center d-none d-md-inline">
            <div style="
                padding: 5%; display:flex;
                flex-wrap:wrap;
                justify-content:space-between;
                gap:10px
                
                ">

                @foreach (auth()->user()->role as $role)
                    <x-template.module-box color="{{ $role->module->color }}" url="{{ $role->module->url }}"
                        title="{{ $role->module->title }}" subtitle="{{ $role->module->subtitle }}" />
                @endforeach
            </div>
        </div>
    </ul>
</div>
<button class="w3-button w3-secondary w3-xsmall sidebar-heading"
    style="text-align: center; font-size: 15px; margin-bottom: 10px" onclick="w3_open()" style="color:white">≡
    <em>
        Module
    </em>
    ≡
</button>
<script>
    function w3_open() {
        document.getElementById("control-sidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("control-sidebar").style.display = "none";
    }
</script>
