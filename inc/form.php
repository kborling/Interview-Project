        <form class="uk-form-stacked" method="post" action="index.php">
            <fieldset data-uk-margin>

                <div class="uk-form-row">
                    <label for="first">First Name:</label>
                </div>
                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Enter your first name" name="first" required data-name="First" autofocus="autofocus"></input>
                </div>

                <div class="uk-form-row">
                    <label for="last">Last Name:</label>
                </div>
                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Enter your last name" name="last" required data-name="Last" autofocus="autofocus"></input>
                </div>

                <div class="uk-form-row">
                    <label for="phone">Phone Number:</label>
                </div>
                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Enter your phone number" name="phone" required data-name="Phone" autofocus="autofocus"></input>
                </div>

                <div class="uk-form-row">
                    <label for="email-address">Email:</label>
                </div>
                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="email" placeholder="Enter your email address" name="email-address" required data-name="Email Address"></input>
                </div>

                <div class="uk-form-row">
                    <label for="address1">Address 1:</label>
                </div>
                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Enter your address" name="address1" required data-name="Address1"></input>
                </div>

                <div class="uk-form-row">
                    <label for="address2">Address 2:</label>
                </div>
                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Enter your apt/suite number" name="address2" data-name="Address2"></input>
                </div>

                <div class="uk-form-row">
                    <label for="zip">Zip Code:</label>
                </div>
                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Enter your zip code" name="zip" required data-name="Zip" pattern="\d{5,5}(-\d{4,4})?"></input>
                </div>

                <div class="uk-form-row">
                    <label for="city">City:</label>
                </div>
                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Enter your city" name="city" data-name="City"></input>
                </div>

                <div class="uk-form-row">
                    <label for="State">State:</label>
                </div>
                <div class="uk-form-row">
                    <select class="uk-form-select" type="text" name="state" data-name="State" data-uk-form-select required>
                        <span></span>
                        <option selected disabled>Choose Your State</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>

                <div class="uk-form-row">
                    <div id="upload-drop" class="uk-placeholder">
                        <i class="uk-icon-cloud-upload uk-icon-medium uk-text-muted uk-margin-small-right"></i> Attach binaries by dropping them here or <a class="uk-form-file">selecting one<input id="upload-select" type="file"></a>.
                    </div>
                    <div id="progressbar" class="uk-progress uk-hidden">
                        <div class="uk-progress-bar" style="width: 0%;">...</div>
                    </div>
                </div>
                
                <div class="uk-form-row">
                    <input class="uk-button uk-button-large uk-button-primary" type="submit" value="Submit" data-wait="Please wait..." data-uk-button></input>
                </div>
            </fieldset>
        </form>