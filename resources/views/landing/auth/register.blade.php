<div class="modal fade" id="registerForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name :</label>
                        <input type="text" class="form-control" id="recipient-name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email :</label>
                        <input type="text" class="form-control" id="recipient-name" name="email">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Password :</label>
                        <input type="text" class="form-control" id="recipient-name" name="password">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Repeat Password :</label>
                        <input type="password" class="form-control" id="recipient-name" name="password_confirmation">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">register</button>
                </div>
            </div>
        </form>
    </div>
</div>
