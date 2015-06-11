<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <?php echo $this->lang->line("table_username"); ?>
                                                </th>
                                                <th>
                                               <?php echo $this->lang->line("table_email"); ?>
                                                </th>
                                                <th>
                                                <?php echo $this->lang->line("table_group"); ?>
                                                </th>
                                                <th>
                                                <?php echo $this->lang->line("table_cargo"); ?>
                                                </th>
                                                <th>
                                                <?php echo $this->lang->line("table_edit"); ?>
                                                </th>
                                                <th>
                                                <?php echo $this->lang->line("table_delete"); ?>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($users as $user) {
                                                ?>
                                            <tr>
                                                <td>
                                                    <?php echo $user['username'];?>
                                                </td>
                                                <td>
                                                    <?php echo $user['email'];?>
                                                </td>
                                                <td>
                                                    <?php echo $user['group_name'];?>
                                                </td>
                                                <td class="center">
                                                   <?php echo $user['cargo'];?>
                                                </td>
                                                <td>
                                                    <a href="" class="user_edit" data-id="<?php echo $user['id'];?>">
                                                       <?php echo $this->lang->line("table_edit"); ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="user_delete" data-id="<?php echo $user['id'];?>" href="#">
                                                       <?php echo $this->lang->line("table_delete"); ?>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>