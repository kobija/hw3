<style>
    @import url("../../styles/usertable.css");
</style>
<div class="wrapper">
    <div class="login-box">
        <h3 class="info-text">Add new user </h3>
        <form class="form-container" action="../public/register.php" method="post">
            <div class="input-addon">
                <input class="form-element input-field" name="emailaddress" placeholder="Email Address" type="emailaddress">
            </div>
            <div class="input-addon">
                <input class="form-element input-field" name="student_id" placeholder="Student_id" type="student_id">
            </div>
            <div class="input-addon">
                <input class="form-element input-field" name="password" placeholder="Password" type="pw">
            </div>
            <div class="input-addon">
                <input type="checkbox" name="admin" value="admin"> Admin <br>
                <input type="checkbox" name="regularuser" value="Regular User"> Regular <br>
            </div>
            <input class="form-element is-submit" type="submit" value="Create User">
        </form>
        <p>View all available users <a href="./allusers.php">here.</a></p>
    </div>
</div>