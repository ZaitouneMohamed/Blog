<div class="card mb-4">
    <div class="card-body text-center">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
        <h5 class="my-3">{{ Auth::user()->name }}</h5>
        <input class="form-control" type="file" id="formFile"><br>
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
</div>
