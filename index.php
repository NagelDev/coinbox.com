<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .container{
        /* background-color: aqua; */
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .container .logo_container img{
        width: 400px;
        height: 300px;
    }
    .container .login_container{
        /* background-color: aqua; */
        width: 400px;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 5px 10px rgba(0, 0, 0,0.3);
        border-radius: 10px;
    }

    .container .login_container form{
        display: flex;
        /* background-color: blue; */
        width: 350px;
        height: 150px;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;

    }
    .container .login_container form input{
        width: 100%;
        height: 40px;
        border: 1px solid #C7C7C7;
        border-radius: 5px;
        padding-left:10px ;
        font-size: 15px;
    }
    .container .login_container form button{
        width: 100%;
        height: 40px;
        border-radius: 5px;
        font-size: 20px;
        background-color: #3030D3;
        color: white;
        border: none;
        cursor: pointer;
    }
    .login_container form .error{
        color: red;
        padding-left: 20px;
    }

    @media screen and (max-width: 800px) {
        .container{
        /* background-color: aqua; */
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction:column;
        justify-content: space-around;
        align-items: center;
        }
    }

    @media screen and (max-width: 420px) {
        .container{
            height:70vh;
            /* background-color:blue; */
        }
        .container .logo_container img{
        width: 200px;
        height: 150px;
        position: relative;
        top:40px;
        }
        .container .login_container{
        /* background-color: aqua; */
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: none;
        border-radius: 10px;
    }
    }
</style>
    <title>Coinbox</title>
</head>
<body>
    <div class="container">
        <div class="logo_container">
            <img src="./img/logo.png" alt="">
        </div>
        <div class="login_container">
            <form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p class="error1"></p>
                <input id="username" type="text" name="username" placeholder="Username" autocomplete="off" >
                
                <input id="password" type="password" name="password" placeholder="Password" >
                
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>

    
<script>let admin = document.getElementById("username")
    let pass = document.getElementById("password")
    let err = document.querySelector(".error1")
    let btn = document.querySelector("button")
    let form = document.querySelector("#myForm")
    console.log("asdfsadf")
    btn.addEventListener("click", (e)=>{
        e.preventDefault()
        

        if(admin.value === "admin" && pass.value === "password"){
            err.innerHTML=""
            window.location.href='analytics.php'
        }else{
            err.innerHTML = "*Incorrect password or username"
            err.style.color = "red"
        }

        admin.value = ""
        pass.value = ""
    })
</script>
</body>
</html>