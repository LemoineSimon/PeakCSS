<!DOCTYPE>
<html>
    <head>
        <link href="css/test_toggle/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
        <script type="text/javascript"> 
            $(document).ready(function() {   
                $('.accordionButton').click(function(){
                    //REMOVE THE ON CLASS FROM ALL BUTTONS
                    $('.accordionButton').removeClass('on');                  
                    //NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
                    $('.accordionContent').slideUp('normal');          
                    //IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
                    if($(this).next().is(':hidden') == true) {                  
                        //ADD THE ON CLASS TO THE BUTTON
                        $(this).addClass('on');                   
                        //OPEN THE SLIDE
                        $(this).next().slideDown('normal');
                     }                
                 });        
                 
                $('.accordionButton').mouseover(function() {
                    $(this).addClass('over');
                }).mouseout(function() {
                    $(this).removeClass('over');                                        
                });
                    
                $('.accordionContent').hide();

            });
        </script>
    </head>

    <body>

<?php REQUIRE 'header.php'; ?>
<div id="choice_box">
    <div class="choice">
        <form>
            <input type="checkbox" name="text" value="Text"> Text </input>
            <input type="checkbox" name="button" value="Button"> Button </input>
			<input type="checkbox" name="input" value="Input"> Input </input>
			<input type="checkbox" name="block" value="Block"> Block </input>
			<input type="checkbox" name="table" value="Table"> Table </input>
        </form>
    </div>
</div>
<section>
    <div id="wrapper">
        <div class="accordionButton"><p>Texte</p></div>
        <div class="accordionContent">
             <table>
                <tr>
                    <th></th>
                    <th>FONT</th>
                    <th>SIZE</th>
                    <th>COLOR</th>
                    <th>SHADOW</th>
                </tr>
                <tr>
                    <td><input type="text" class="radius-all" value="Example"></td>
                    <td>
                        <select>
                            <option>Arial</option>
                            <option>Helvetica</option>
                            <option>Cambria</option>
                            <option>Times New Roman</option>
                        </select>
                    </td>
                    <td>
                        <select>
        <?php 
            for($i=10; $i<41; $i++){
                echo '<option value="'.$i.'">'.$i.' px</option>';
                $i++;
            }
        ?>
                        </select>
                    </td>
                    <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right"></input></td>
                    <td><span class="before-input radius-left">H</span><input type="text" class="shadow radius-right"/>
                        <span class="before-input radius-left">V</span><input type="text" class="shadow radius-right"/>
                        <span class="before-input radius-left">B</span><input type="text" class="shadow radius-right"/>
                        <span class="before-input radius-left">D</span><input type="text" class="shadow radius-right"/></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<?php require 'footer.php'; ?>

</body>
</html>