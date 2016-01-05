<?php
// remove hidden entries from list
$projects = $this->filterListEntries($this->projects);
?>
<table>
	<caption class="sr"><?php echo $this->kga['lang']['projectslist'] ?></caption>
  <tbody>
	<tr class="sr">
		<td scope="col"><?php echo $this->kga['lang']['projects'] ?></td>
		<td scope="col"><?php echo $this->kga['lang']['actions'] ?></td>
		<td scope="col"><?php echo $this->kga['lang']['timeworking'] ?></td>
	</tr>
 <?php
    if (count($projects) == 0)
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
        foreach ($projects as $project)
        {
            ?>
            <tr id="row_project" data-id="<?php echo $project['projectID']?>" class="project customer<?php echo $project['customerID']?> <?php echo $this->cycle(array('odd','even'))->next()?>" >

            <td>
                <?php if ($project['visible'] != 1): ?><span style="color:#bbb"><?php endif; ?>
                <?php if ($this->kga['conf']['flip_project_display']): ?>
                    <?php if ($this->kga['conf']['showIDs'] == 1): ?>
                      <span class="ids"><?php echo $project['projectID']?></span>
                    <?php endif; ?>
                    <span class="lighter"><?php echo $this->escape($this->truncate($project['customerName'],30,'...'))?>:</span> <?php echo $this->escape($project['name']) ?>
                <?php else: ?>
                    <?php if ($this->kga['conf']['project_comment_flag'] == 1): ?>
                        <?php if ($this->kga['conf']['showIDs'] == 1): ?>
                          <span class="ids"><?php echo $project['projectID']?></span>
                        <?php endif; ?>
                        <?php echo $this->escape($project['name'])?>
                        <span class="lighter">
                        <?php if ($project['comment']): ?>
                          (<?php echo $this->escape($this->truncate($project['comment'],30,'...')) ?>)
                        <?php else: ?>
                          <span class="lighter">(<?php echo $this->escape($project['customerName'])?>)</span>
                        <?php endif; ?>
                        </span>
                    <?php else: ?>
                        <?php if ($this->kga['conf']['showIDs'] == 1): ?>
                          <span class="ids"><?php echo $project['projectID']?></span>
                        <?php endif; ?>
                        <?php echo $this->escape($project['name'])?>
                        <span class="lighter">(<?php echo $this->escape($this->truncate($project['customerName'],30,'...')) ?>)</span>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if ($project['visible'] != 1): ?></span><?php endif; ?>
            </td>
            <td class="annotation"></td>
            <td class="option">
                <?php if ($this->show_project_edit_button): ?>
                <button title="<?php echo $this->kga['lang']['edit'].' '.$project['name']?>" onclick="editSubject('project',<?php echo $project['projectID']?>); $(this).blur(); return false;">
                  <img src="../skins/<?php echo $this->escape($this->kga['conf']['skin'])?>/grfx/edit2.gif" width="13" height="13" alt="<?php echo $this->kga['lang']['edit'].' '.$project['name']?>"  />
                </button>
                <?php endif; ?>
                <button  title="<?php echo $this->kga['lang']['filter'].' '.$project['name']?>" onclick="lists_update_filter('project',<?php echo $project['projectID']?>); $(this).blur(); return false;">
                  <img src="../skins/<?php echo $this->escape($this->kga['conf']['skin'])?>/grfx/filter.png" width="13" height="13" alt="<?php echo $this->kga['lang']['filter'].' '.$project['name']?>"/>
                </button >
                <button  title="<?php echo $this->kga['lang']['select'].' '.$project['name']?>" class="preselect" onclick="buzzer_preselect_project(<?php echo $project['projectID']?>,'<?php echo $this->jsEscape($project['name'])?>',<?php echo $project['customerID']?>,'<?php echo $this->jsEscape($project['customerName'])?>'); return false;" id="ps<?php echo $project['projectID']?>">
                  <img src="../skins/<?php echo $this->escape($this->kga['conf']['skin'])?>/grfx/preselect_off.png" width="13" height="13" alt="<?php echo $this->kga['lang']['select'].' '.$project['name']?>"/>
                </button>
            </td>
          </tr>
        <?php
        }
    }
    ?>
  </tbody>
</table>  
