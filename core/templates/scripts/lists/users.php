<table>
	<caption class="sr"><?php echo $this->kga['lang']['userslist'] ?></caption>
	<tr class="sr">
		<td scope="col"><?php echo $this->kga['lang']['actions'] ?></td>
		<td scope="col"><?php echo $this->kga['lang']['users'] ?></td>
		<td scope="col"><?php echo $this->kga['lang']['timeworking'] ?></td>
	</tr>
  <tbody>
    <?php
    if (count($this->users) == 0)
    {
        ?>
        <tr>
            <td colspan="3">
                <?php echo $this->error(); ?>
            </td>
        </tr>
        <?php
    }
    else
    {
        foreach ($this->users as $user)
        {
            ?>
            <tr id="row_user" data-id="<?php echo $user['userID']?>" class="<?php echo $this->cycle(array('odd','even'))->next()?>">
              <!--  option cell -->
              <td class="option">
                <button onclick="lists_update_filter('user',<?php echo $user['userID']?>); $(this).blur(); return false;"><img
                        src="../skins/<?php echo $this->escape($this->kga['conf']['skin'])?>/grfx/filter.png" width="13" height="13"
                        alt="<?php echo $this->kga['lang']['filter'].' '.$user['name']?>" title="<?php echo $this->kga['lang']['filter'].' '.$user['name']?>" border="0" />
                </button>
              </td>

              <!-- name cell -->
              <td class="clients">
                <?php echo $this->escape($user['name']) ?>
              </td>

              <!-- annotation cell -->
              <td class="annotation"></td>
            </tr>
            <?php
        }
    }
  ?>
  </tbody>
</table>  
