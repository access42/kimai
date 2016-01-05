<?php
// remove hidden entries from list
$customers = $this->filterListEntries($this->customers);
?>
<table>
	<caption class="sr"><?php echo $this->kga['lang']['customerslist'] ?></caption>
  <tbody>
	<tr class="sr">
		<td scope="col"><?php echo $this->kga['lang']['actions'] ?></td>
		<td scope="col"><?php echo $this->kga['lang']['customers'] ?></td>
		<td scope="col"><?php echo $this->kga['lang']['timeworking'] ?></td>
	</tr>
    <?php
    if (count($customers) == 0)
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
        foreach ($customers as  $customer)
        {
            ?>

            <tr id="row_customer" data-id="<?php echo $customer['customerID']?>" class="customer customer<?php echo $customer['customerID']?> <?php echo $this->cycle(array('odd','even'))->next()?>">

              <!-- option cell -->
              <td class="option">
                <?php if ($this->show_customer_edit_button): ?>
                <button onclick="editSubject('customer',<?php echo $customer['customerID']?>); $(this).blur(); return false;" title="<?php echo $this->kga['lang']['edit'].' '.$customer['name']?>" >
                  <img src="../skins/<?php echo $this->escape($this->kga['conf']['skin'])?>/grfx/edit2.gif" width="13" height="13" alt="<?php echo $this->kga['lang']['edit'].' '.$customer['name']?>"/>
                </button>
                <?php endif; ?>
                <button onclick="lists_update_filter('customer',<?php echo $customer['customerID']?>); $(this).blur(); return false;" title="<?php echo $this->kga['lang']['filter'].' '.$customer['name']?>">
                  <img src="../skins/<?php echo $this->escape($this->kga['conf']['skin'])?>/grfx/filter.png" width="13" height="13" alt="<?php echo $this->kga['lang']['filter'].' '.$customer['name']?>"/>
                </button>
              </td>

              <!-- name cell -->
              <td class="clients" onclick="lists_customer_highlight(<?php echo $customer['customerID']?>); $(this).blur(); return false;">
                  <?php if ($customer['visible'] != 1): ?><span style="color:#bbb"><?php endif; ?>
                  <?php if ($this->kga['conf']['showIDs'] == 1): ?><span class="ids"><?php echo $customer['customerID']?></span> <?php endif; echo $this->escape($customer['name'])?>
                  <?php if ($customer['visible'] != 1): ?></span><?php endif; ?>
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
