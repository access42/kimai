<div id="timeSheet_head">
    <div class="left">
        <?php if (isset($this->kga['user'])): ?>
            <a href="#" onclick="floaterShow('../extensions/ki_timesheets/floaters.php','add_edit_timeSheetEntry',selected_project+'|'+selected_activity,0,650); $(this).blur(); return false;"><?php echo $this->kga['lang']['add'] ?></a>
        <?php endif; ?>
    </div>
    <table>
    <caption class="sr"><?php echo $this->kga['lang']['timesheetSummary'] ?></caption>
        <tbody>
        <tr>
            <th class="option"><?php echo $this->kga['lang']['actions'] ?></th>
            <th scope="col" class="date"><?php echo $this->kga['lang']['datum'] ?></th>
            <th scope="col"  class="from"><?php echo $this->kga['lang']['in'] ?></th>
            <th scope="col"  class="to"><?php echo $this->kga['lang']['out'] ?></th>
            <th scope="col"  class="time"><?php echo $this->kga['lang']['time'] ?></th>
            <?php if ($this->showRates): ?>
                <th scope="col"  class="wage"><?php echo $this->kga['lang']['wage'] ?></th>
            <?php endif; ?>
            <th scope="col" class="customer"><?php echo $this->kga['lang']['customer'] ?></th>
            <th scope="col"  class="project"><?php echo $this->kga['lang']['project'] ?></th>
            <th scope="col"  class="activity"><?php echo $this->kga['lang']['activity'] ?></th>
            <?php if ($this->showTrackingNumber) { ?>
                <th scope="col"  class="description"><?php echo $this->kga['lang']['description'] ?></th>
                <th scope="col"  class="trackingnumber"><?php echo $this->kga['lang']['trackingNumber'] ?></th>
            <?php } ?>
            <th scope="col"  class="username"><?php echo $this->kga['lang']['username'] ?></th>
        </tr>
				<?php echo $this->timeSheet_display ?>
<script type="text/javascript">
    $(document).ready(function () {
        ts_ext_onload();
    });
</script>
