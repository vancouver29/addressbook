<?php include ('core/init.php'); ?>
<?php
    //Create DB Object
$db = new Database();
//Run Query
$db->query("SELECT * FROM contacts");

//Assign Result Set
$contacts = $db->resultset();
?>

<div class="grid-x grid-margin-x">
    <div class="large-12 cell">
        <table>
            <thead>
            <tr>
                <th width="200">Name</th>
                <th width="130">Phone</th>
                <th width="200">Email</th>
                <th width="250">Address</th>
                <th width="100">Group</th>
                <th width="150">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><a href="contact.html"><?php echo $contact->first_name . " " . $contact->last_name; ?></a></td>
                <td><a href="contact.html"><?php echo $contact->phone; ?></a></td>
                <td><a href="contact.html"><?php echo $contact->email; ?></a></td>
                <td>
                    <ul>
                        <li><?php echo $contact->address1; ?></li>
                        <li><?php if ($contact->address2) echo $contact->address2; ?></li>
                        <li><?php echo $contact->zipcode ?>, <?php echo $contact->state; ?> <?php echo $contact->zipcode; ?></li>
                    </ul>
                </td>
                <td><?php echo $contact->contact_group; ?></td>
                <td>
                    <div class="button-group">
                        <a class="add-btn button tiny" data-open="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>" >Edit</a>
                        <div id="editModal<?php echo $contact->id; ?>" dat-cid="<?php echo $contact->id; ?>" class="reveal" data-reveal>
<!--                            <a class="add-btn button float-right small " data-open="addModal" >Add Contact</a>-->
<!--                            <div id="addModal" class="reveal" data-reveal>-->




                            <h2>Edit Contact</h2>
                            <form id="editContact" action="#" method="post">
                                <div class="grid-x grid-margin-x">
                                    <div class="large-6 cell">
                                        <label>First Name
                                            <input name="first_name" type="text" placeholder="Enter First Name" value="<?php echo $contact->first_name; ?>">
                                        </label>
                                    </div>
                                    <div class="large-6 cell">
                                        <label>Last Name
                                            <input name="last_name" type="text" placeholder="Enter Last Name" value="<?php echo $contact->last_name; ?>">
                                        </label>
                                    </div>
                                </div>

                                <div class="grid-x grid-margin-x">
                                    <div class="large-4 cell">
                                        <label>Email
                                            <input name="email" type="email" placeholder="Enter Email Address" value="<?php echo $contact->email; ?>">
                                        </label>
                                    </div>
                                    <div class="large-4 cell">
                                        <label>Phone Number
                                            <input name="phone" type="text" placeholder="Enter Phone Number" value="<?php echo $contact->phone; ?>">
                                        </label>
                                    </div>
                                    <div class="large-4 cell">
                                        <label>Contact Group
                                            <select name="contact_group">
                                                <option value="Family" <?php if ($contact->group == 'Family'){echo 'selected';}?>>Family</option>
                                                <option value="Friends" <?php if ($contact->group == 'Friends'){echo 'selected';}?>>Friends</option>
                                                <option value="Business" <?php if ($contact->group == 'Business'){echo 'selected';}?>>Business</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>

                                <div class="grid-x grid-margin-x">
                                    <div class="cell large-6 ">
                                        <label>Address1
                                            <input name="address1" type="text" placeholder="Enter Address 1" value="<?php echo $contact->address1; ?>">
                                        </label>
                                    </div>
                                    <div class="cell large-6 ">
                                        <label>Address2
                                            <input name="address2" type="text" placeholder="Enter Address 2" value="<?php echo $contact->address2; ?>">
                                        </label>
                                    </div>
                                </div>

                                <div class="grid-x grid-margin-x">
                                    <div class="large-4 cell">
                                        <label>City
                                            <input name="city" type="text" placeholder="Enter City" value="<?php echo $contact->city; ?>">
                                        </label>
                                    </div>
                                    <div class="large-4 cell">
                                        <label>State
                                            <select name="state">
                                                <?php foreach($states as $key => $value): ?>
                                                    <?php
                                                    if ($key == $contact->state) {
                                                        $selected = 'selected';
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    ?>
                                                    <option value="<?php echo $key;?>" <?php echo $selected; ?>><?php echo $value; ?></option>
                                                <?php  endforeach; ?>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="large-4 cell">
                                        <label>Zipcode
                                            <input name="zipcode" type="text" placeholder="Enter Zipcode" value="<?php echo $contact->zipcode; ?>">
                                        </label>
                                    </div>
                                </div>

                                <div class="grid-x grid-margin-x">
                                    <div class="large-12 cell">
                                        <label>Notes
                                            <textarea name="notes" placeholder="Enter Optional Notes"><?php echo $contact->notes; ?></textarea>
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $contact->id; ?>">
                                <input name="submit" type="submit" class="add-btn button float-right small" value="Submit">
                                <!--                    <a class="close-reveal-modal">&#215;</a>-->
                            </form>





                        </div>
                        <a href="#" class="button tiny alert" data-open="myModal">Delete</a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).foundation();
</script>