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
                    <button class="formbold-btn" onclick="clickHandler();">Submit</button>
                </div>
                <p id="hasil"></p>
            </div>
        </div>
 
    </section>
</main>
 
<script>


const clickHandler = async () => {
    const btnWarty = document.querySelector('.formbold-btn');
    let warapam = document.form_main.warranti.value;
    let warapama = warapam;
    const url = 'https://markautodetailing.com/mos/wp-json/mark-order-system/v1/GetUserMaintenance?user_code=' + warapama;
        fetch(url, {method:'GET',
            headers: { Authorization : 'Basic bW9zOm9yZGVyX3N5c3RlbV9hY2Nlc3M='},
        })
    // .then(response => response.json())
    // .then(json => console.log(json));
    .then(response => response.json())
          .then(response => document.getElementById("hasil").innerHTML =
            "Hi Mr/Mrs: " + (response.payments.CustName))
          .catch(error => console.log('error', error));

};
btnWarty.addEventListener('click', clickHandler);
</script>
 
    <?php include "includes/footer.php" ?>