<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>

    body{
        font-family:Times New Roman;
    }

    #login{
        width:400px;
        margin:50px auto;
        border:1px solid black;
    }

    #header{
        background:darkblue;
        color:white;
        text-align:center;
        font-size:60px;
    }

    table{
        margin:20px;
    }

    #footer{
        margin:20px;
    }

    </style>

</head>

<body>

<div id="login">

    <div id="header">
        Login
    </div>

    <form action="prosesLogin.php" method="post">

    <table>

        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="username">
            </td>
        </tr>

        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password">
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" value="login">
            </td>
        </tr>

    </table>

    </form>

    <hr>

    <div id="footer">
        @UKM2014<br>
        KristianDavid-2473033©
    </div>

</div>

</body>
</html>