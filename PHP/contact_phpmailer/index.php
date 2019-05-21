<!DOCTYPE html>
<html lang="en">
<Head>
    <title>Contact</title>
    <meta charset="utf-8"/>
    <meta name="description" content="Contact form"/>
    <link rel="stylesheet" href="../../Style.CSS"/>
</Head>
<Body>
<div id="NavBar">
    <ul>
        <NavBarLi><a href="../../Index.html">Home</a></NavbarLi>
        <div class="dropdown">
            <NavBarLi class="dropbtn"><a href="#">Skills</a></NavbarLi>
            <div class="dropdown-content">
                <a href="../../SkillsHtmlCss.html">HTML/CSS</a>
                <a href="../../SkillsCsharp.html">C#</a>
            </div>
        </div>
        <div class="dropdown">
            <NavBarLi class="dropbtn active"><a href="#">About Me</a> </NavBarLi>
            <div class="dropdown-content">
                <a href="../../MoreAboutMe.html">CV and Application</a>
                <a href="/ImageMap/ImageMapFamily.html">My family</a>
                <a href="../../ContactForm.html">Contact</a>
            </div>
        </div>
    </ul>
</div>
<p style="font-size:50px; text-align: center">Under construction</p>
<div>
    <form style="float:left; margin-top:20px;" id="Contact" action="/PHP/contactForm.php" method="POST" target="_blank" >
        <label for="name">Input Name:</label><br>
        <input type="text" name="Name" autofocus/><br>

        <label for="Github">Input Github Name:</label><br>
        <input type="text" name="Github" placeholder="Optional"/><br>

        <label for="Email">Input email:</label><br>
        <input type="email" name="Email"/><br>

        <label for="Phone">Input phone number:</label><br>
        <input type="number" name="Phone"/><br>

        <label for="Subject">Input subject:</label><br>
        <input type="text" name="Subject"/><br>

        <!--Radio Buttons
            Choose sex:
        <label for="Male">
            <input id="Male" type="radio" name="Male/Female">Male
        </label>
        <label for="Female">
            <input id="Female" type="radio" name="Male/Female">Female
        </label><br>
        <label for="Sweet">
                <input id="Sweet" type="checkbox" name="personality">Sweet
            </label>
        <label for="Kind">
            <input id="Kind" type="checkbox" name="personlity">Kind
        </label>
        <label for="Mean">
                <input id="Mean" type="checkbox" name="personlity">Mean
        </label><br>-->

        <textarea name="Message" style="width:200px;"placeholder="Message"></textarea><br>
        <input type="submit" value="SEND" />
        <input type="reset" value="RESET"/>
    </form>
</div>


</Body>
</html>