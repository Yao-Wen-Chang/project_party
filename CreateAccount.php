<!DOCTYPE html>
<html>
    <body>
        <div>
            <form action = "InsertUserData.php" method = "post">
                Username: <input type = "text" name = "username"><br>
                Password: <input type = "password" name = "password"><br>
                Email: <input type = "email" name = "email"><br>
                Gender: <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female<br>
                Birth: <input type="date" id="birth" name="birth"><br>        
                Photo: <img id = "photo" src="" style = "width:48px;height:48px;">  
                        
                       <input id = "upload-file" type = "file" multiple = "false" name = "photo" ><br>
                       <!--button of browser should be designed-->
                        
                       <script>
                            var fileUploader = document.getElementById("upload-file");
                            var photo = document.getElementById("photo");
                            var fileReader = new FileReader();
                            fileUploader.addEventListener("change", function(event) {
                                if(this.files.length > 0) 
                                    fileReader.readAsDataURL(this.files[0])
                                else 
                                    photo.src = "";
         
                            }

                            , false);
                            fileReader.addEventListener("load", function(event) {
                                photo.src = this.result;                       
                            }      
                            , false);

                       </script>
                <input type = "submit">
                
            </form>
        </div>
    </body>



</html>
