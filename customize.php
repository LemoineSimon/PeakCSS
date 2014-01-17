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
    <div class="toggle_text">
        <a href="" class="toggler"><!--<img class="fleche" src="img/fleche_bas.png" alt="fleche" width="15px">-->Text</a>
    </div>	
    <div class="toggle">
        <table>
            <tr>
                <th></th>
                <th>FONT</th>
                <th>SIZE</th>
                <th>COLOR</th>
                <th>SHADOW</th>
            </tr>
            <tr>
                <td><input type="text" class="radius-all example" value="Example" name="text1"></td>
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
                <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right" id="text1"></input></td>
                <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="shadow radius-right" name="horizontal"/>
                    <span class="before-input radius-left shadow">Vertical</span><input type="text" class="shadow radius-right" name="vertical"/><br>
                    <span class="before-input radius-left shadow">Blur</span><input type="text" class="shadow radius-right" name="blur"/>
                    <span class="before-input radius-left shadow">Distance</span><input type="text" class="shadow radius-right" name="distance"/></td>
            </tr>
            <tr>
                <td><input type="text" class="radius-all" value="Example" name="text2"></td>
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
                <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right" id="text2"></input></td>
                <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="shadow radius-right" name="horizontal"/>
                    <span class="before-input radius-left shadow">Vertical</span><input type="text" class="shadow radius-right" name="vertical"/><br>
                    <span class="before-input radius-left shadow">Blur</span><input type="text" class="shadow radius-right" name="blur"/>
                    <span class="before-input radius-left shadow">Distance</span><input type="text" class="shadow radius-right" name="distance"/></td>
            </tr>
        </table>
    </div>

    <div class="toggle_text">
        <a href="" class="toggler"><!--<img class="fleche" src="img/fleche_bas.png" alt="fleche" width="15px">-->Button</a>
    </div>	
    <div class="toggle">
        <table>
            <tr>
                <th></th>
                <th>FONT</th>
                <th>SIZE</th>
                <th>COLOR</th>
                <th>SHADOW</th>
            </tr>
            <tr>
                <td><input type="button" class="" value="Example"></td>
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
                <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right" id="picker3"></input></td>
                <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="shadow radius-right" name="horizontal"/>
                    <span class="before-input radius-left shadow">Vertical</span><input type="text" class="shadow radius-right" name="vertical"/><br>
                    <span class="before-input radius-left shadow">Blur</span><input type="text" class="shadow radius-right" name="blur"/>
                    <span class="before-input radius-left shadow">Distance</span><input type="text" class="shadow radius-right" name="distance"/></td>
            </tr>
        </table>
    </div>
    <div class="toggle_text">
        <a href="" class="toggler"><!--<img class="fleche" src="img/fleche_bas.png" alt="fleche" width="15px">-->Input</a>
    </div>	
    <div class="toggle">
        <table>
            <tr>
                <th></th>
                <th>FONT</th>
                <th>SIZE</th>
                <th>COLOR</th>
                <th>SHADOW</th>
            </tr>
            <tr>
                <td><input type="text" class="" value="Example"></td>
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
                <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right" id="picker4"></input></td>
                <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="shadow radius-right" name="horizontal"/>
                    <span class="before-input radius-left shadow">Vertical</span><input type="text" class="shadow radius-right" name="vertical"/><br>
                    <span class="before-input radius-left shadow">Blur</span><input type="text" class="shadow radius-right" name="blur"/>
                    <span class="before-input radius-left shadow">Distance</span><input type="text" class="shadow radius-right" name="distance"/></td>
            </tr>
        </table>
    </div>
</section>
<?php require 'footer.php'; ?>