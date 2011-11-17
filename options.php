<?php
$location = $dictionarybox_options_page; // Form Action URI

/* Check for admin Options submission and update options*/
if ('process' == $_POST['stage']) {
    update_option('dictionary_box_title', $_POST['dictionary_box_title']);
	update_option('dictionary_box_subheading', $_POST['dictionary_box_subheading']);
    update_option('dictionary_box_glossary', $_POST['dictionary_box_glossary']);
    update_option('dictionary_box_margin_right', $_POST['dictionary_box_margin_right']);
	$status = "Dictionary Box settings updated successfully.";
}

?>

<div class="wrap">
  <h2 style="background:url('http://dictionarybox.com/dboxsettings.png') 0 8px no-repeat;padding-left:40px;"><?php _e(' Dictionary Box Settings', 'dictionary-box') ?></h2>
  <?php if(isset($status)) {?>
  	<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204);">
  		<p><?php echo $status;?></p>
	</div>
  <?php } ?>

  <form  name="form1" method="post" action="<?php echo $location ?>&amp;updated=true">
	<input type="hidden" name="stage" value="process" />
	 <table width="100%" cellspacing="0" cellpadding="0" class="form-table">
        <tr valign="baseline">
         <th scope="row"><?php _e('Title', 'dictionary-box') ?></th> 
         <td><input type="text" name="dictionary_box_title" id="dictionary_box_title" size="35" value="<?php echo get_option('dictionary_box_title'); ?>" /> </td>
        </tr>
		<tr valign="baseline">
        <th scope="row"><?php _e('Subheading', 'dictionary-box') ?></th> 
        <td><input type="text" name="dictionary_box_subheading" id="dictionary_box_subheading" size="35" value="<?php echo get_option('dictionary_box_subheading'); ?>" /> </td>
        </tr>
		<tr valign="baseline">
         <th scope="row"><?php _e('Glossary', 'dictionary-box') ?></th> 
         <td>
		 <SELECT name="dictionary_box_glossary" id="dictionary_box_glossary"  ONCHANGE="document.getElementById('dictionary_box_subheading').value = this.options[this.selectedIndex].text.replace('&hArr; ','').replace('(Simplified)','').replace('(Traditional)','').replace('English English','English').replace('Turkish Turkish','Turkish') + ' Dictionary';">
			<!-- <OPTION SELECTED VALUE="">Select...</OPTION> -->
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToAlbanian,AlbanianToEnglish') echo 'SELECTED'; ?> value="EnglishToAlbanian,AlbanianToEnglish">English &hArr; Albanian</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToChineseS,ChineseSToEnglish') echo 'SELECTED'; ?> value="EnglishToChineseS,ChineseSToEnglish">English &hArr; Chinese(Simplified)</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToChineseT,ChineseTToEnglish') echo 'SELECTED'; ?> value="EnglishToChineseT,ChineseTToEnglish">English &hArr; Chinese(Traditional)</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToDutch,DutchToEnglish') echo 'SELECTED'; ?> value="EnglishToDutch,DutchToEnglish">English &hArr; Dutch</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToEnglish') echo 'SELECTED'; ?> value="EnglishToEnglish">English &hArr; English</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToFrench,FrenchToEnglish') echo 'SELECTED'; ?> value="EnglishToFrench,FrenchToEnglish">English &hArr; French</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToGerman,GermanToEnglish') echo 'SELECTED'; ?> value="EnglishToGerman,GermanToEnglish">English &hArr; German</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToGreek,GreekToEnglish') echo 'SELECTED'; ?> value="EnglishToGreek,GreekToEnglish">English &hArr; Greek</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToItalian,ItalianToEnglish') echo 'SELECTED'; ?> value="EnglishToItalian,ItalianToEnglish">English &hArr; Italian</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToJapanese,JapaneseToEnglish') echo 'SELECTED'; ?> value="EnglishToJapanese,JapaneseToEnglish">English &hArr; Japanese</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToKorean,KoreanToEnglish') echo 'SELECTED'; ?> value="EnglishToKorean,KoreanToEnglish">English &hArr; Korean</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToPortuguese,PortugueseToEnglish') echo 'SELECTED'; ?> value="EnglishToPortuguese,PortugueseToEnglish">English &hArr; Portuguese</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToRussian,RussianToEnglish') echo 'SELECTED'; ?> value="EnglishToRussian,RussianToEnglish">English &hArr; Russian</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToSpanish,SpanishToEnglish') echo 'SELECTED'; ?> value="EnglishToSpanish,SpanishToEnglish">English &hArr; Spanish</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='EnglishToTurkish,TurkishToEnglish') echo 'SELECTED'; ?> value="EnglishToTurkish,TurkishToEnglish">English &hArr; Turkish</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='FrenchToDutch,DutchToFrench') echo 'SELECTED'; ?> value="FrenchToDutch,DutchToFrench">French &hArr; Dutch</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='FrenchToGerman,GermanToFrench') echo 'SELECTED'; ?> value="FrenchToGerman,GermanToFrench">French &hArr; German</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='FrenchToItalian,ItalianToFrench') echo 'SELECTED'; ?> value="FrenchToItalian,ItalianToFrench">French &hArr; Italian</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='FrenchToPortuguese,PortugueseToFrench') echo 'SELECTED'; ?> value="FrenchToPortuguese,PortugueseToFrench">French &hArr; Portuguese</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='FrenchToRussian,RussianToFrench') echo 'SELECTED'; ?> value="FrenchToRussian,RussianToFrench">French &hArr; Russian</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='FrenchToSpanish,SpanishToFrench') echo 'SELECTED'; ?> value="FrenchToSpanish,SpanishToFrench">French &hArr; Spanish</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='FrenchToTurkish,TurkishToFrench') echo 'SELECTED'; ?> value="FrenchToTurkish,TurkishToFrench">French &hArr; Turkish</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='GermanToItalian,ItalianToGerman') echo 'SELECTED'; ?> value="GermanToItalian,ItalianToGerman">German &hArr; Italian</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='GermanToRussian,RussianToGerman') echo 'SELECTED'; ?> value="GermanToRussian,RussianToGerman">German &hArr; Russian</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='GermanToSpanish,SpanishToGerman') echo 'SELECTED'; ?> value="GermanToSpanish,SpanishToGerman">German &hArr; Spanish</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='GermanToTurkish,TurkishToGerman') echo 'SELECTED'; ?> value="GermanToTurkish,TurkishToGerman">German &hArr; Turkish</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='KoreanToSpanish,SpanishToKorean') echo 'SELECTED'; ?> value="KoreanToSpanish,SpanishToKorean">Korean &hArr; Spanish</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='RussianToSpanish,SpanishToRussian') echo 'SELECTED'; ?> value="RussianToSpanish,SpanishToRussian">Russian &hArr; Spanish</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='RussianToTurkish,TurkishToRussian') echo 'SELECTED'; ?> value="RussianToTurkish,TurkishToRussian">Russian &hArr; Turkish</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='SpanishToChineseT,ChineseTToSpanish') echo 'SELECTED'; ?> value="SpanishToChineseT,ChineseTToSpanish">Spanish &hArr; Chinese(Traditional)</OPTION>
			<OPTION <?php if(get_option('dictionary_box_glossary')=='TurkishToTurkish') echo 'SELECTED'; ?> value="TurkishToTurkish">Turkish &hArr; Turkish</OPTION>
			</SELECT>
		 </td>

        </tr>
		<tr valign="baseline">
         <th scope="row"><?php _e('Margin right', 'dictionary-box') ?></th> 
         <td><input type="text" size="2" name="dictionary_box_margin_right" id="dictionary_box_margin_right" value="<?php echo get_option('dictionary_box_margin_right'); ?>" /> px</td>
        </tr>
     </table>

	<p class="submit">
      <input type="submit" name="Submit"  class="button-primary" value="<?php _e('Save Changes', 'dictionary-box') ?>" />
    </p>
  </form>
  
</div>