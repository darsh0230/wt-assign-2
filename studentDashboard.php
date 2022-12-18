<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body>

    <div class="form">
      <div class="title">Submit a FeedBack</div>
      <!-- <div class="subtitle">Submit a FeedBack</div> -->

      <!-- action="formSuccessful.php" -->
      <form action="formSuccessful.php" id="usrform", method="POST" onsubmit="return validateForm()">

      <div class="input-container ic1">
        <input id="srn" class="input" type="text" placeholder=" " name="srn" oninput="this.value = this.value.toUpperCase()" maxlength="8" />
        <div class="cut cut-short"></div>
        <label for="srn" class="placeholder">SRN</label>
      </div>

      <div class="input-container ic1">
        <input id="sec" class="input" type="text" placeholder=" " name="sec" oninput="this.value = this.value.toUpperCase()" maxlength="2" />
        <div class="cut"></div>
        <label for="sec" class="placeholder">Section</label>
      </div>

      <div class="input-container ic1">
        <input id="teachId" class="input" type="text" placeholder=" " name="teachId" oninput="this.value = this.value.toUpperCase()" maxlength="7" />
        <div class="cut"></div>
        <label for="teachId" class="placeholder">Teacher Id</label>
      </div>

      <div class="input-container ic2">
        <input id="dos" class="input" type="date" placeholder=" " name="dos" />
        <div class="cut cut-short"></div>
        <label for="dos" class="placeholder">Date</label>
      </div>

      <div class="input-container ic2">
      <textarea class="input" rows="6" cols="50" name="feedback" form="usrform"></textarea>
      <div class="cut"></div>
      <label for="feedback" class="placeholder">Feedback</>

    </div>
      
      <button type="text" class="submit">submit</button>

    </form>
    </div>

    <script>
      function validateForm() {
        let srn = document.forms["usrform"]["srn"].value;
        let sec = document.forms["usrform"]["sec"].value;
        let teachId = document.forms["usrform"]["teachId"].value;
        let feedback = document.forms["usrform"]["feedback"].value;
        let dos = document.forms["usrform"]["dos"].value;

        var srnRegex = /[A-Z]\d{2}[A-Z]{2}|d{3}/;
        var secRegex = /\d[A-Z]/

        if (!srnRegex.test(srn)) {
          alert("Invalid SRN");
          return false;
        }

        if(!secRegex.test(sec)){
          alert("Invalid Section");
          return false;
        }

        if(teachId==""){
          alert("Enter TeachId");
          return false;
        }

        if(feedback==""){
          alert("Give Some feedback");
          return false;
        }

        if(dos==""){
          alert("Select Date");
          return false;
        }


        return true;
      }
    </script>

    <Style>
        body {
        align-items: center;
        background-color: #000;
        display: flex;
        justify-content: center;
        height: 100vh;
        font-family: sans-serif;
        }

        .form {
        background-color: #15172b;
        border-radius: 20px;
        box-sizing: border-box;
        height: 650px;
        padding: 20px;
        width: 420px;
        }

        .title {
        color: #eee;
        font-family: sans-serif;
        font-size: 36px;
        font-weight: 600;
        margin-top: 30px;
        }

        .subtitle {
        color: #eee;
        font-family: sans-serif;
        font-size: 16px;
        font-weight: 600;
        margin-top: 10px;
        }

        .input-container {
        height: 50px;
        position: relative;
        width: 100%;
        }

        .ic1 {
        margin-top: 40px;
        }

        .ic2 {
        margin-top: 30px;
        }

        .input {
        background-color: #303245;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        font-size: 18px;
        height: 100%;
        outline: 0;
        padding: 4px 20px 0;
        width: 100%;
        }

        .cut {
        background-color: #15172b;
        border-radius: 10px;
        height: 20px;
        left: 20px;
        position: absolute;
        top: -20px;
        transform: translateY(0);
        transition: transform 200ms;
        width: 76px;
        }

        .cut-short {
        width: 50px;
        }

        .input:focus ~ .cut,
        .input:not(:placeholder-shown) ~ .cut {
        transform: translateY(8px);
        }

        .placeholder {
        color: #65657b;
        font-family: sans-serif;
        left: 20px;
        line-height: 14px;
        pointer-events: none;
        position: absolute;
        transform-origin: 0 50%;
        transition: transform 200ms, color 200ms;
        top: 20px;
        }

        .input:focus ~ .placeholder,
        .input:not(:placeholder-shown) ~ .placeholder {
        transform: translateY(-30px) translateX(10px) scale(0.75);
        }

        .input:not(:placeholder-shown) ~ .placeholder {
        color: #808097;
        }

        .input:focus ~ .placeholder {
        color: #dc2f55;
        }

        .submit {
        background-color: #08d;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        cursor: pointer;
        font-size: 18px;
        height: 50px;
        margin-top: 38px;
        // outline: 0;
        text-align: center;
        width: 100%;
        }

        .submit:active {
        background-color: #06b;
        }

    </Style>
</body>
</html>