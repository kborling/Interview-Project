        <form class="uk-form uk-form-stacked uk-panel uk-panel-box" method="post" action="index.php" enctype="multipart/form-data">

                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="First Name" name="first" required data-name="First" autofocus="autofocus"></input>
                </div>

                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Last Name" name="last" required data-name="Last" autofocus="autofocus"></input>
                </div>

                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Phone Number" name="phone" required data-name="Phone" autofocus="autofocus"></input>
                </div>

                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="email" placeholder="Email Address" name="email-address" required data-name="Email Address"></input>
                </div>

                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Address 1" name="address1" required data-name="Address1"></input>
                </div>

                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Address 2" name="address2" data-name="Address2"></input>
                </div>

                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="Zip Code" name="zip" required data-name="Zip" pattern="\d{5,5}(-\d{4,4})?"></input>
                </div>

                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text" placeholder="City" name="city" required data-name="City"></input>
                </div>

                <div class="uk-form-row uk-text-left">
                    <select class="uk-form-select" type="text" name="state" data-name="State" data-uk-form-select required>
                        <span></span>
                        <option selected disabled>State</option>
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
                <div class="uk-form-row uk-text-left">
                    <label for="featured">Featured Image</label>
                </div>
                <div class="uk-form-row uk-text-left">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000"></input>
                    <input id="upload-select" type="file" id="upload" name="upload"></input>
                </div>
                <div class="uk-form-row uk-text-left">
                    <span class="uk-text-small">File Size must be smaller than 2MB</span>
                </div>
                <div class="uk-form-row uk-text-right">
                    <button class="uk-button uk-button-primary" type="submit" data-wait="Please wait..." data-uk-button>Submit</button>
                </div>
        </form>