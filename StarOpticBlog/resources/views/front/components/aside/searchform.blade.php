<!-- Widget [Search Bar Widget]-->
<div class="widget search">
    <header>
        <h3 class="h6">Pretražite blog</h3>
    </header>
        <form action="" class="search-form">

        <div class="form-group">
            <input type="text" name="keyword" placeholder="Pretazite blog" value="{{request()->keyword ?? ''}}">
            <button type="submit" class="submit"><i class="icon-search"></i></button>
            @error('keyword')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </form>

</div>
