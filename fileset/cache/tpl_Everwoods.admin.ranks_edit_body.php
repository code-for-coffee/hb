<?php

// eXtreme Styles mod cache. Generated on Mon, 24 Jan 2005 11:08:21 +0000 (time=1106564901)

?>
<h1><?php echo isset($this->vars['L_RANKS_TITLE']) ? $this->vars['L_RANKS_TITLE'] : $this->lang('L_RANKS_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_RANKS_TEXT']) ? $this->vars['L_RANKS_TEXT'] : $this->lang('L_RANKS_TEXT'); ?></p>

<form action="<?php echo isset($this->vars['S_RANK_ACTION']) ? $this->vars['S_RANK_ACTION'] : $this->lang('S_RANK_ACTION'); ?>" method="post"><table class="forumline" cellpadding="4" cellspacing="1" border="0" align="center">
	<tr>
		<th class="thTop" colspan="2"><?php echo isset($this->vars['L_RANKS_TITLE']) ? $this->vars['L_RANKS_TITLE'] : $this->lang('L_RANKS_TITLE'); ?></th>
	</tr>
	<tr>
		<td class="row1" width="38%"><span class="gen"><?php echo isset($this->vars['L_RANK_TITLE']) ? $this->vars['L_RANK_TITLE'] : $this->lang('L_RANK_TITLE'); ?>:</span></td>
		<td class="row2"><input class="post" type="text" name="title" size="35" maxlength="40" value="<?php echo isset($this->vars['RANK']) ? $this->vars['RANK'] : $this->lang('RANK'); ?>" /></td>
	</tr>
	<tr>
		<td class="row1"><span class="gen"><?php echo isset($this->vars['L_RANK_SPECIAL']) ? $this->vars['L_RANK_SPECIAL'] : $this->lang('L_RANK_SPECIAL'); ?></span></td>
		<td class="row2"><input type="radio" name="special_rank" value="1" <?php echo isset($this->vars['SPECIAL_RANK']) ? $this->vars['SPECIAL_RANK'] : $this->lang('SPECIAL_RANK'); ?> /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?> &nbsp;&nbsp;<input type="radio" name="special_rank" value="0" <?php echo isset($this->vars['NOT_SPECIAL_RANK']) ? $this->vars['NOT_SPECIAL_RANK'] : $this->lang('NOT_SPECIAL_RANK'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="38%"><span class="gen"><?php echo isset($this->vars['L_RANK_MINIMUM']) ? $this->vars['L_RANK_MINIMUM'] : $this->lang('L_RANK_MINIMUM'); ?>:</span></td>
		<td class="row2"><input class="post" type="text" name="min_posts" size="5" maxlength="10" value="<?php echo isset($this->vars['MINIMUM']) ? $this->vars['MINIMUM'] : $this->lang('MINIMUM'); ?>" /></td>
	</tr>
	<tr>
		<td class="row1" width="38%"><span class="gen"><?php echo isset($this->vars['L_RANK_IMAGE']) ? $this->vars['L_RANK_IMAGE'] : $this->lang('L_RANK_IMAGE'); ?>:</span><br />
		<span class="gensmall"><?php echo isset($this->vars['L_RANK_IMAGE_EXPLAIN']) ? $this->vars['L_RANK_IMAGE_EXPLAIN'] : $this->lang('L_RANK_IMAGE_EXPLAIN'); ?></span></td>
		<td class="row2"><input class="post" type="text" name="rank_image" size="40" maxlength="255" value="<?php echo isset($this->vars['IMAGE']) ? $this->vars['IMAGE'] : $this->lang('IMAGE'); ?>" /><br /><?php echo isset($this->vars['IMAGE_DISPLAY']) ? $this->vars['IMAGE_DISPLAY'] : $this->lang('IMAGE_DISPLAY'); ?></td>
	</tr>
   <tr>
     <td class="row1" width="38%"><span class="gen"><?php echo isset($this->vars['L_TAG_OPEN']) ? $this->vars['L_TAG_OPEN'] : $this->lang('L_TAG_OPEN'); ?>:</span></td>
     <td class="row2" width="62%">
        <input type="text" class="post" name="tag_open" size="51" value="<?php echo isset($this->vars['TAG_OPEN']) ? $this->vars['TAG_OPEN'] : $this->lang('TAG_OPEN'); ?>" />
   </tr>
   <tr>
     <td class="row1" width="38%"><span class="gen"><?php echo isset($this->vars['L_TAG_CLOSE']) ? $this->vars['L_TAG_CLOSE'] : $this->lang('L_TAG_CLOSE'); ?>:</span></td>
     <td class="row2" width="62%">
        <input type="text" class="post" name="tag_close" size="51" value="<?php echo isset($this->vars['TAG_CLOSE']) ? $this->vars['TAG_CLOSE'] : $this->lang('TAG_CLOSE'); ?>" />
   </tr>
	<tr>
		<td class="catBottom" colspan="2" align="center"><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" /></td>
	</tr>
</table>
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?></form>
