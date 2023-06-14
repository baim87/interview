<?php $title = 'warranty'; include "includes/header.php" ?>
<?php include "includes/navbar.php" ?>
 
 
<main class="main">
    <section class="home section" id="home">
        <div class="formbold-main-wrapper">
            <div class="formbold-form-wrapper">
                <form name="form_main" class="contactForm" id="contactForm">
                    <fieldset style="border:0px">
                       <div class="formbold-mb-5">
                            <label for="warranty" class="formbold-form-label" id="warranty"> Claim your Warranty </label>
                            <input
                            type="text"
                            name="warranty"
                            id="warranti"
                            placeholder="Input the warranty here"
                            class="formbold-form-input"
                            />
                        </div>
                     </fieldset>
                </form>
                <div>
                    <button class="formbold-btn">Submit</button>
                </div>
                <p id="hasil"></p>
            </div>
        </div>
 
    </section>
</main>
    <?php include "includes/footer.php" ?>
