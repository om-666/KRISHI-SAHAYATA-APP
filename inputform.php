<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registation.css">
    <link rel="stylesheet" href="https://unicons.iconscount.com/release/v4.0.0/css/line.css">
    <title>Document</title>
    <style>
        body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #4070f4;

}

.container{
    position: relative;
    max-width: 900PX;
    width: 100%;
    border-radius:6px ;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);

}

.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    background-color: #4070f4;
    border-radius: 8px;
}

.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
}
.container form .details.ID
{
    margin-top: 30px;
}

.container form .details
{
    margin-top: 30px;
}

.container form .title{
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;

}

.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

form .fields .input-field{
    display: flex;
    width: calc(100%/3 - 15px);
   
    flex-direction: column;
    margin: 4px 0;

}
 .imput-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input{
    outline: none;
    border-radius: 5px;
    font-size:14px ;
    font-weight: 400;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}

.input-field input:is(:focus,:valid){
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);

}

.input-field input[type="date"]
{
    color: #707070;
}

.input-field input[type="date"]
{
    color: #333;
}
.container form button{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    background-color: #4070f4;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;}
form button:hover{
    background-color: #265df2;}

    </style>
</head>
<body>
    <div class="container">
        <header>Scheme,State,Season,Year</header>
        <form action="new.php" method="post">
            <div class="form first">
             <div class="details personal">
                <div class="input-field">
                    <label >Scheme</label>
                    <input type="text" placeholder="Enter Scheme" required name="scheme">
                </div>
                <div class="input-field">
                    <label >Season</label>
                    <input type="text" placeholder="Enter Season" required name="season">
                </div>

                <div class="input-field">
                    <label > Year</label>
                    <input type="text" placeholder="Enter Year" required name="year">
                </div>
             </div>
            </div>
            <div class="details personal">
                <div class="fields">
               
                <div class="input-field">
                    <label >Mix Cropping</label>                   
                    <input type="text" placeholder="Enter Your Choice " required name="mixcropping">
                </div>
                <div class="input-field">
                    <label >Crop</label>
                    <input type="text" placeholder="Enter Your Crop name" required name="crop">
                </div>

                <div class="input-field">
                    <label >Sowing Date</label>
                    <input type="text" placeholder="Enter Date" required name="sowingdate">
                </div>

                <div class="input-field">
                    <label >Survey Khata Number</label>
                    <input type="number" placeholder="Enter Khata Number" required name="surveykhatano">
                </div>

                <div class="input-field">
                    <label >Khasra/Plot No.</label>
                    <input type="number" placeholder="Enter Plot No." required name="plotno">
                </div>

                <div class="input-field">
                    <label >Insured Area</label>
                    <input type="text" placeholder="Enter Insured Area" required name="insuredarea">
                </div>
               </div>
            </div>
   
               
        <input type="submit" value="submit" name="submit">
                       
                
   
                </div>
               </div>
        </form>
    </div>
</body>
</html>
