<!DOCTYPE HTML>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="styles.css">
            <script src="jquery.js"></script>
            <title>Kospanov Sanzhar Web Lab 1</title>
        </head>
        <body>
            <script>
                var x;
            </script>
        	<style type="text/css">
        		html, body, p {
					font-weight: bold;
					font-size: 18px;
					margin: 0px;
					padding: 0px;
				}

				body{
					background-color: white;
					
					text-align: center;
					width: 100%;
					margin: 10px auto;
					
				    -webkit-background-size: cover;
				    -moz-background-size: cover;
				    -o-background-size: cover;
				    
				}

                #res {
                    border: 1px solid black;
                    width: 100%;
                    margin-top: 30px;

                } 
                #res td {border: 1px solid black;}

				.container{
					width: 100%;
					max-width: 1500px;
					font-size: 18px;
					margin: 10px auto;
					
				}

				.button{
					width: 100%;
					max-width: 1500px;
					margin: 10px auto;
					font-size: 18px;
				}

        	</style>
            <div class="container">
                <div>
                    <p>Лабораторная работа №1</p>
                    <p>Выполнил:Коспанов Санжар</p>
                    <p>Группа Р3213</p>
                    <p>Вариант 213007</p>
                </div>
                 <img  src = "web1img.png"> 
            </div>
            <div>
                X:
                <button class="x" value="-4">-4</button>
                <button class="x" value="-3">-3</button>
                <button class="x" value="-2">-2</button>
                <button class="x" value="-1">-1</button>
                <button class="x" value="0">0</button>
                <button class="x" value="1">1</button>
                <button class="x" value="2">2</button>
                <button class="x" value="3">3</button>
                <button class="x" value="4">4</button>
                <script>
                    /*
                function myFunction() {
                    alert($(this).val());
                }
                    */
                $("button").click(function() {
                    //var fired_button = $(this).val();
                    //alert(fired_button);
                    x = $(this).val();
                });
                </script>
                <!--
                <input type="button" class="x" value="-3"> 
                <input type="button" class="x" value="-2">
                <input type="button" class="x" value="-1"> 
                <input type="button" class="x" value="0">
                <input type="button" class="x" value="1"> 
                <input type="button" class="x" value="2"> 
                <input type="button" class="x" value="3">
                <input type="button" class="x" value="4"> 
                <script>
                    button.onclick({
                        alert(button.value());
                    })
                </script>
            -->
            </div>

            
            
            <div>
                Y:
                <input type="text" class="y" list="list" maxlength="4" name="y" id="y" pattern="(-)[0-5]{1}(.)" placeholder="Введите координату Y" required data-rule="num">
                    <datalist id="list">
                        <option value="-3">-3</option>
                        <option value="-2">-2</option>
                        <option value="-1">-1</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </datalist>
            </div>
            <div>
                R:
                <select name="r" class="r" id="r" required>
                    <option>1</option>
                    <option>1.5</option>
                    <option>2</option>
                    <option>2.5</option>
                    <option>3</option>
                </select>
            </div>   
            <div>
                <input type="submit" value="Отправить" class="otpravka">
            </div> 
            <!--
            <script>
                let inputs = document.querySelectorAll('input');
                let otpravka = document.querySelectorAll(".otpravka");

                for (let input of inputs) {
                    input.addEventListener('blur', function() {
                        let rule = this.dataset.rule;
                        let value = this.value;

                        this.classList.remove('invalid');
                        this.classList.remove('valid');

                        /*if (value <= -3 || value >= 5 || value.replace(/\s/g, '').length === 0 || isNaN(value)){
                            this.classList.add('invalid');
                            otpravka.forEach(el => {
                                el.disabled = true;
                            });
                        }
                        else {
                            this.classList.add('valid');
                            otpravka.forEach(el => {
                                el.disabled = false;
                            });
                        }
                        */
                    }); 
                }
            </script> 
            --> 
            <script>
                $(document).ready(function() {
                    $('input.otpravka').on('click', function() {
                        var xValue = x;
                        var yValue = $('input.y').val();
                        var rValue = $('select.r').val();
                        $.ajax({
                            method: "POST",
                            url: "check.php",
                            data: { x: xValue, y: yValue, r: rValue }
                        })
                        .done(function( msg ) {
                            $("#res").html(msg);
                        });
                    })
                });
            </script>
            <table id="res">
                            
        </table>

        </body>

        


    </html>
