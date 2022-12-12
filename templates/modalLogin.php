<!--Login -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="loginModalLabel">Sign In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="emailSignIn">Email address</label>
                    <input type="email" class="form-control" name="email" id="emailSignIn" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="passwordSignIn">Password</label>
                    <input type="password" class="form-control" name="password" id="passwordSignIn" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-danger w-100 mt-2 font-weight-bold">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>