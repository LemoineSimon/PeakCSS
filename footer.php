<footer>
    <div class="content">
        <div class="column">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="customize.php">Customize</a></li>
                <li><a href="explore.php">Explore</a></li>
                <li><a href="contact.php">Contact</a></li>                    
            </ul>            
        </div>
        <div class="column">
            <h2>Peak<span>CSS</span></h2>
        </div>
        <div class="column">
            <ul>
                <li><a href="project_team.php">Team PeakCSS</a></li>
                <li><a href="project_team.php#project">The project</a></li>
                <li><a href="customize.php">Conditions of use</a></li>
            </ul>          
        </div>   
        <div class="bottom-footer">
              <p class="copyright">All Right Reserved - PeakCSS - 2014</p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/anim_home.js" type="text/javascript" language="JavaScript"></script>
        <script type='text/javascript' src="js/colpick.js"></script>
        <script type='text/javascript' src="js/script.js"></script>
        <script type='text/javascript'>
            $(document).ready(function(){
                $shadowColor='#000';
                
                function textShadow(param1){
                    $id = param1;
                    $x = $('[rel='+$id+'].text-shadow.horizontal').val();
                    $y = $('[rel='+$id+'].text-shadow.vertical').val();
                    $blur = $('[rel='+$id+'].text-shadow.blur').val();
                    $('[name='+$id+']').css({textShadow: $x + "px " + $y + "px " + $blur + "px " + ($shadowColor)});
                    console.log('text-shadow');
                };
                function boxShadow(param1){
                    $id = param1;
                    $x = $('[rel='+$id+'].box-shadow.horizontal').val();
                    $y = $('[rel='+$id+'].box-shadow.vertical').val();
                    $blur = $('[rel='+$id+'].box-shadow.blur').val();
                    $spread = $('[rel='+$id+'].box-shadow.spread').val();
                    $inset='';
                    $('[rel='+$id+'].box-shadow.inset').is(':checked') ? $inset= 'inset' : $inset='';
                    $style= $inset+' '+$x+'px '+$y+'px '+$blur+'px '+$spread+'px '+$shadowColor;
                    $('[name='+$id+']').css("box-shadow", $style);
                };
                $('body').on('click','.picker',function(){
                    $id = $(this).attr("rel");
                    $(this).hasClass('shadow') ? $shadow = 1 : $shadow = 0;
                    $(this).hasClass('text-shadow') ? $textShadow = 1 : $textShadow = 0;
                    $(this).hasClass('backgroundColor') ? $backgroundColor = 1 : $backgroundColor = 0;
                    console.log('shadow = '+$shadow);
                    console.log('text-shadow = '+$textShadow);
                    console.log('backgroundColor = '+$backgroundColor);
                
                $('.picker').colpick({
                    layout:'hex',
                    submit:0,
                    colorScheme:'dark',
                    onChange:function(hsb,hex,rgb,fromSetColor){
                        if(!fromSetColor){
                            if($shadow==1){
                                console.log("a la classe shadow");
                                $('[rel='+$id+'].picker.shadow').val(hex).css('border-color','#'+hex);
                                $shadowColor = '#'+hex;
                                $textShadow==1 ? textShadow($id) : boxShadow($id);
                            }else if($backgroundColor==1){
                                console.log("a la classe backgroundColor");
                                $('[rel='+$id+'].picker.backgroundColor').val(hex).css('border-color','#'+hex);
                                $('[name='+$id+']').css('background','#'+hex);
                            }else{
                                console.log("a la classe color");
                                $('[rel='+$id+'].picker.color').val(hex).css('border-color','#'+hex);
                                $('[name='+$id+']').css('color','#'+hex);
                            }
                        }
                    }
                });
                    });
                $('body').on('click','.size',function(){
                    $id = $(this).attr("rel");
                    $type = $('[name='+$id+']').attr("type");
                    $val = $(this).val();
                    $type=='text' ? $('[name='+$id+']').css({'font-size':$val+'px', 'height':$val+'px'}) : $('[name='+$id+']').css('font-size',$val+'px');
                });
                $('body').on('click','.font',function(){
                    console.log("font");
                    $id = $(this).attr("rel");
                    console.log($id);
                    $val = $(this).val();
                    $('[name='+$id+']').css('font-family',$val);
                });
                $('body').on('keyup','.text-shadow',function(){
                    $id = $(this).attr("rel");
                    textShadow($id);
                });
                $('body').on('keyup','.box-shadow',function(){
                    $id = $(this).attr("rel");
                    boxShadow($id);
                });
               $('body').on('click','.inset',function(){
                    $id = $(this).attr("rel");
                    boxShadow($id);
                });
                $('body').on('click','input[type=checkbox].backgroundColor',function(){
                    console.log("CHECKBOX BACKGROUND");
                    $id = $(this).attr("rel");
                    if($(this).is(':checked')){
                        $('[rel='+$id+'].backgroundColor.picker').prop('disabled',false).css('background','#FFF');
                        $('[name='+$id+']').css('background', $('[rel='+$id+'].picker.backgroundColor').css('border-color'));
                    }else{
                        $('[rel='+$id+'].backgroundColor.picker').prop('disabled',true).css('background','');
                        $('[name='+$id+']').css('background','');
                    }
                });
                $('.add').click(function(){
                    $ref = $(this).attr("name");
                    $refL = $ref.length;
                    $parent = $(this).parent();
                    $child = $parent.children().children().children().last();
                    $name = $child.children().children().attr("name");
                    $n = $name.substring($refL);
                    $n++;
                    if($ref=='text'){
                        $string = '<tr><td><p contenteditable="true" class="example" name="text'+$n+'">Example</p></td><td><select class="font" rel="text'+$n+'"><option>Arial</option><option>Helvetica</option><option>Cambria</option><option>Times New Roman</option></select></td><td><select class="size" rel="text'+$n+'"<?php for($i=10; $i<41; $i++){echo '<option value="'.$i.'">'.$i.' px</option>';$i++;}?></select></td><td><span class="before-input radius-left">#</span><input type="text" class="color picker radius-right" rel="text'+$n+'"></input></td><td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="text-shadow horizontal shadow radius-right" value="0" rel="text'+$n+'"/><span class="before-input radius-left shadow">Vertical</span><input type="text" class="text-shadow vertical shadow radius-right" value="0" rel="text'+$n+'"/><br><span class="before-input radius-left shadow">Blur</span><input type="text" class="text-shadow blur shadow radius-right" value="0" rel="text'+$n+'"/><span class="before-input radius-left shadow">#</span><input type="text" class="text-shadow shadow picker radius-right" width="40" rel="text'+$n+'"></input></td><td><input type="checkbox" class="backgroundColor radius-right" rel="text'+$n+'"/><span class="before-input radius-left">#</span><input type="text" class="backgroundColor picker radius-right" rel="text'+$n+'" disabled></input></td></tr>}';
                    $parent.children().children().append($string);
                    }else if($ref=='button'){
                        $string = '<tr><td><input type="button" class="example" value="Example" name="button'+$n+'"></td><td><select class="font" rel="button'+$n+'"><option>Arial</option><option>Helvetica</option><option>Cambria</option><option>Times New Roman</option></select></td><td><select class="size" rel="button'+$n+'"><?php for($i=10; $i<41; $i++){echo '<option value="'.$i.'">'.$i.' px</option>';$i++;}?></select></td><td><span class="before-input radius-left">#</span><input type="text" class="color picker radius-right" rel="button'+$n+'"></input></td><td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="box-shadow horizontal shadow radius-right" value="0" rel="button'+$n+'"/><span class="before-input radius-left shadow">Vertical</span><input type="text" class="box-shadow vertical shadow radius-right" value="0" rel="button'+$n+'"/><span class="before-input radius-left shadow">Blur</span><input type="text" class="box-shadow blur shadow radius-right" value="0" rel="button'+$n+'"/><br><span class="before-input radius-left shadow">Spread</span><input type="text" class="box-shadow spread shadow radius-right" value="0" rel="button'+$n+'"/><span class="before-input radius-all shadow inset"><input type="checkbox" class="box-shadow inset shadow radius-right" rel="button'+$n+'"/> Inset</span><span class="before-input radius-left shadow">#</span><input type="text" class="box-shadow shadow picker radius-right" width="40" rel="button'+$n+'"></input></td><td><input type="checkbox" class="backgroundColor radius-right" rel="button'+$n+'"/><span class="before-input radius-left">#</span><input type="text" class="backgroundColor picker radius-right" rel="button'+$n+'" disabled></input></td></tr>';
                        $parent.children().children().append($string);
                    }else if($ref=='input'){
                        $string= '<tr><td><input type="text" class="example" value="Example" name="input'+$n+'"></td><td><select class="font" rel="input'+$n+'"><option>Arial</option><option>Helvetica</option><option>Cambria</option><option>Times New Roman</option></select></td><td><select class="size" rel="input'+$n+'"><?php for($i=10; $i<41; $i++){echo '<option value="'.$i.'">'.$i.' px</option>';$i++;}?></select></td><td><span class="before-input radius-left">#</span><input type="text" class="color picker radius-right" rel="input'+$n+'"></input></td><td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="box-shadow horizontal shadow radius-right" value="0" rel="input'+$n+'"/><span class="before-input radius-left shadow">Vertical</span><input type="text" class="box-shadow vertical shadow radius-right" value="0" rel="input'+$n+'"/><span class="before-input radius-left shadow">Blur</span><input type="text" class="box-shadow blur shadow radius-right" value="0" rel="input'+$n+'"/><br><span class="before-input radius-left shadow">Spread</span><input type="text" class="box-shadow spread shadow radius-right" value="0" rel="input'+$n+'"/><span class="before-input radius-all shadow inset"><input type="checkbox" class="box-shadow inset shadow" rel="input'+$n+'"/> Inset</span><span class="before-input radius-left shadow">#</span><input type="text" class="box-shadow shadow picker radius-right" width="40" rel="input'+$n+'"></input></td><td><input type="checkbox" class="backgroundColor radius-right" rel="input'+$n+'"/><span class="before-input radius-left">#</span><input type="text" class="backgroundColor picker radius-right" rel="input'+$n+'" disabled></input></td></tr>';
                        $parent.children().children().append($string);
                    }
                });
            });
    </script>
</body>
</html>