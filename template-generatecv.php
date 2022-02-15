<?php
get_header();
/* Template Name: GenerationCv */
?>

    <div>
        <h1>GenerationCv</h1>
    </div>
<section>
<form method="POST" id="global_cv">
    <input type="text" id="js_surname" name="surname" placeholder="Doe">
    <span class="error" id="error_surname"></span>

    <input type="text" id="js_name" name="name" placeholder="John">
    <span class="error" id="error_name"></span>

    <input type="text" id="js_email" name="email" placeholder="exemple@gmail.com">
    <span class="error" id="error_mail"></span>

    <input type="text" id="js_adress" name="adress" placeholder="8 rue exemple">
    <input type="number" id="js_postal" name="postal" placeholder="76100">
    <input type="text" id="js_city" name="city" placeholder="Rouen">

    <input type="submit" name="submitted" id="js_submitted_global">

</form>
</section>
<section>
    <form method="POST" id="experience_cv">
        <input type="date" id="js_predate" name="predate" placeholder="">
        <span class="error" id="error_predate"></span>

        <input type="date" id="js_lastdate" name="lastdate" placeholder="">
        <span class="error" id="error_lastdate"></span>

        <input type="text" id="js_post_name" name="postname" placeholder="*Boulanger">
        <span class="error" id="error_post_name"></span>

        <input type="text" id="js_entreprise_name" name="entreprisename" placeholder="Elsi & Franck">
        <span class="error" id="error_entreprise_name"></span>

        <input type="text" id="js_post_place" name="postplace" placeholder="Cherbourg">
        <span class="error" id="error_post_place"></span>

        <input type="text" id="js_post_description" name="postdescription" placeholder="Je sais faire du pain">
        <span class="error" id="error_post_description"></span>

        <input type="submit" name="submitted" id="js_submitted_experience">
    </form>
</section>

<?php
get_footer();
?>