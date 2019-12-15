<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
<div class="form-container">
    <!-- START HTML FORM -->
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
        <div>
            <label>
                <input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
            </label>
        </div>

        <div>	
            <label>
                <input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
            </label>
        </div>

    <!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
        <div>	
            <label>
                <select name="Subject" required="required" title="Subject is Required" tabindex="30">
                    <option value="">How Can I Be Of Service?</option>
                    <option value="Book A Session">Book A Session</option>
                    <option value="Using An Image">Using An Image</option>
                    <option value="Question">Question</option>
                    <option value="Other">Other (Specify Below)</option>
                </select>
            </label>
        </div>

        <label>
            <textarea name="Comments" cols="36" rows="4" placeholder = "Message" tabindex="60"></textarea>
        </label>

        <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>

        <div>
            <input type="submit" value="submit" />
        </div>
    </form>
</div>
<!-- END HTML FORM -->

