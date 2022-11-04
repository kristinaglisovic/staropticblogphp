@if(session()->has('user'))
    <div class="add-comment">
        <header>
            <h3 class="h6">Ostavite komentar</h3>
        </header>
        <form action="{{route('comment.store')}}" method="post" class="commenting-form">
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" name="username" id="username" placeholder="{{$user->username}}" class="form-control" disabled>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" name="username" id="useremail" placeholder="{{$user->email}} (ne objavljuje se)" class="form-control" disabled>
                </div>
                <div class="form-group col-md-12">
                    <textarea name="comment" id="comment" placeholder="Napišite komentar" class="form-control {{$errors->has('comment') ? 'novalid' : session('sent') }}">{{old('comment')}}</textarea>
                    @error('comment')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-secondary">Objavi</button>
                </div>
            </div>
        </form>
        <p class="text-info h3 font-weight-bold">{{session('msg')}}</p>
    </div>
    @else
    <div class="add-comment">
        <header>
            <h3 class="h6">Morate biti ulogovani da biste ostavili komentar!</h3>
        </header>
    </div>
    @endif

    </div>
