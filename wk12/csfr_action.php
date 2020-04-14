                $password = $_POST['password'];
                if ($username == "host" && $password == "pass") {
                        print('<div>Login is a Success!</div>');
                }
                else {
                        print('<div>Login is a Failure! :(</div>');
                }
        }
        else {
                print('<div>Session is invalid cannot access this page!</div>');
        }
}
else {
        echo "<form method='post'>
        <p>Username: <input type='text' name='username' placeholder='username' /></p>
        <p>Password: <input type='password' name='password' placeholder='password' /></p>
        <input type='hidden' name='confirmation' value=$confirmation />
        <input type='submit'>
        </form>" ;
}
?>
