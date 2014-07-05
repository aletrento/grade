<html>
 <head>
  <title>select</title>
  <META http-equiv="Content-Type" content="text/html; charset=latin-1">  
  <link rel="icon" href="img/uk.ico">
  
  <script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByName('tense[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
  
  <style type="text/css">
  body
{
    font-size:13px;
    font-family: 'Trebuchet MS', Helvetica, sans-serif;
}
  select
{
    font-family: 'Trebuchet MS', Helvetica, sans-serif;
    font-size:13px;
}
  input
{
    font-family: 'Trebuchet MS', Helvetica, sans-serif;
    font-size:13px;
}
   a
{
    text-decoration: none;
    font-weight: bold;
    color: #000000;
}
   a:hover
{
    color: #9370DB;
}
img
{
    opacity: 0.6;
}
img:hover
{
    opacity: 1.0;
}
   table
{
    font-family: 'Trebuchet MS', Helvetica, sans-serif;
    font-size:13px;
}
   td:nth-child(even)
{
    border-right: double;
}
  </style>
 </head>
 
<body bgcolor="#FFFFFF">
<a href="index.php"><img src="img/clip.png" width="230" height="140" align="right" hspace="40" vspace="40" title="back home" /></a>
<center>
<h2><p align="center">Find your exercises</p></h2>
</center>

<?
$objConnect = mysql_connect("","","") or die("No DB to select.");
$objDB = mysql_select_db("your_DB");
$abc = "SELECT * FROM items WHERE type = 'abc'"; 
$q_abc = mysql_query($abc);
$n_abc = mysql_num_rows($q_abc);
$error = "SELECT * FROM items WHERE type = 'error'"; 
$q_error = mysql_query($error);
$n_error = mysql_num_rows($q_error);
$cloze = "SELECT * FROM items WHERE type = 'cloze'"; 
$q_cloze = mysql_query($cloze);
$n_cloze = mysql_num_rows($q_cloze);
$makeq = "SELECT * FROM items WHERE type = 'makeq'"; 
$q_makeq = mysql_query($makeq);
$n_makeq = mysql_num_rows($q_makeq);
$write = "SELECT * FROM items WHERE type = 'write'"; 
$q_write = mysql_query($write);
$n_write = mysql_num_rows($q_write);
$pos_adj = "SELECT * FROM items WHERE topic = 'pos_adj'"; 
$q_pos_adj = mysql_query($pos_adj);
$n_pos_adj = mysql_num_rows($q_pos_adj);
$pos_adj_per_pro = "SELECT * FROM items WHERE topic = 'pos_adj_per_pro'"; 
$q_pos_adj_per_pro = mysql_query($pos_adj_per_pro);
$n_pos_adj_per_pro = mysql_num_rows($q_pos_adj_per_pro);
$adv = "SELECT * FROM items WHERE topic = 'adv'"; 
$q_adv = mysql_query($adv);
$n_adv = mysql_num_rows($q_adv);
$art = "SELECT * FROM items WHERE topic = 'art'"; 
$q_art = mysql_query($art);
$n_art = mysql_num_rows($q_art);
$aux = "SELECT * FROM items WHERE topic = 'aux'"; 
$q_aux = mysql_query($aux);
$n_aux = mysql_num_rows($q_aux);
$be = "SELECT * FROM items WHERE topic = 'be'"; 
$q_be = mysql_query($be);
$n_be = mysql_num_rows($q_be);
$com_sup = "SELECT * FROM items WHERE topic = 'com_sup'"; 
$q_com_sup = mysql_query($com_sup);
$n_com_sup = mysql_num_rows($q_com_sup);
$counta = "SELECT * FROM items WHERE topic = 'counta'"; 
$q_counta = mysql_query($counta);
$n_counta = mysql_num_rows($q_counta);
$gen = "SELECT * FROM items WHERE topic = 'gen'"; 
$q_gen = mysql_query($gen);
$n_gen = mysql_num_rows($q_gen);
$link = "SELECT * FROM items WHERE topic = 'link'"; 
$q_link = mysql_query($link);
$n_link = mysql_num_rows($q_link);
$inf_ger_null = "SELECT * FROM items WHERE topic = 'inf_ger_null'"; 
$q_inf_ger_null = mysql_query($inf_ger_null);
$n_inf_ger_null = mysql_num_rows($q_inf_ger_null);
$mod_can = "SELECT * FROM items WHERE topic = 'mod_can'"; 
$q_mod_can = mysql_query($mod_can);
$n_mod_can = mysql_num_rows($q_mod_can);
$mod_may = "SELECT * FROM items WHERE topic = 'mod_may'"; 
$q_mod_may = mysql_query($mod_may);
$n_mod_may = mysql_num_rows($q_mod_may);
$mod_sho = "SELECT * FROM items WHERE topic = 'mod_sho'"; 
$q_mod_sho = mysql_query($mod_sho);
$n_mod_sho = mysql_num_rows($q_mod_sho);
$mod_mus_hav = "SELECT * FROM items WHERE topic = 'mod_mus_hav'"; 
$q_mod_mus_hav = mysql_query($mod_mus_hav);
$n_mod_mus_hav = mysql_num_rows($q_mod_mus_hav);
$mod_will = "SELECT * FROM items WHERE topic = 'mod_will'"; 
$q_mod_will = mysql_query($mod_will);
$n_mod_will = mysql_num_rows($q_mod_will);
$mod_mix = "SELECT * FROM items WHERE topic = 'mod_mix'"; 
$q_mod_mix = mysql_query($mod_mix);
$n_mod_mix = mysql_num_rows($q_mod_mix);
$passi = "SELECT * FROM items WHERE topic = 'passi'"; 
$q_passi = mysql_query($passi);
$n_passi = mysql_num_rows($q_passi);
$prep_pla = "SELECT * FROM items WHERE topic = 'prep_pla'"; 
$q_prep_pla = mysql_query($prep_pla);
$n_prep_pla = mysql_num_rows($q_prep_pla);
$prep_tim = "SELECT * FROM items WHERE topic = 'prep_tim'"; 
$q_prep_tim = mysql_query($prep_tim);
$n_prep_tim = mysql_num_rows($q_prep_tim);
$per_pro = "SELECT * FROM items WHERE topic = 'per_pro'"; 
$q_per_pro = mysql_query($per_pro);
$n_per_pro = mysql_num_rows($q_per_pro);
$pro_pos = "SELECT * FROM items WHERE topic = 'pro_pos'"; 
$q_pro_pos = mysql_query($pro_pos);
$n_pro_pos = mysql_num_rows($q_pro_pos);
$rel = "SELECT * FROM items WHERE topic = 'rel'"; 
$q_rel = mysql_query($rel);
$n_rel = mysql_num_rows($q_rel);
$qtag = "SELECT * FROM items WHERE topic = 'qtag'"; 
$q_qtag = mysql_query($qtag);
$n_qtag = mysql_num_rows($q_qtag);
$quanti = "SELECT * FROM items WHERE topic = 'quanti'"; 
$q_quanti = mysql_query($quanti);
$n_quanti = mysql_num_rows($q_quanti);
$indep = "SELECT * FROM items WHERE topic = 'indep'"; 
$q_indep = mysql_query($indep);
$n_indep = mysql_num_rows($q_indep);
$repo = "SELECT * FROM items WHERE topic = 'repo'"; 
$q_repo = mysql_query($repo);
$n_repo = mysql_num_rows($q_repo);
$short = "SELECT * FROM items WHERE topic = 'short'"; 
$q_short = mysql_query($short);
$n_short = mysql_num_rows($q_short);
$sp = "SELECT * FROM items WHERE topic = 'sp'"; 
$q_sp = mysql_query($sp);
$n_sp = mysql_num_rows($q_sp);
$mixed = "SELECT * FROM items WHERE topic = 'mixed'"; 
$q_mixed = mysql_query($mixed);
$n_mixed = mysql_num_rows($q_mixed);
$tense = "SELECT * FROM items WHERE topic = 'tense'"; 
$q_tense = mysql_query($tense);
$n_tense = mysql_num_rows($q_tense);
$used = "SELECT * FROM items WHERE topic = 'used'"; 
$q_used = mysql_query($used);
$n_used = mysql_num_rows($q_used);
$wh = "SELECT * FROM items WHERE topic = 'wh'"; 
$q_wh = mysql_query($wh);
$n_wh = mysql_num_rows($q_wh);
$mix = "SELECT * FROM items WHERE tense = 'mix'"; 
$q_mix = mysql_query($mix);
$n_mix = mysql_num_rows($q_mix);
$cond = "SELECT * FROM items WHERE tense = 'cond'"; 
$q_cond = mysql_query($cond);
$n_cond = mysql_num_rows($q_cond);
$cond0 = "SELECT * FROM items WHERE tense = 'cond0'"; 
$q_cond0 = mysql_query($cond0);
$n_cond0 = mysql_num_rows($q_cond0);
$cond1 = "SELECT * FROM items WHERE tense = 'cond1'"; 
$q_cond1 = mysql_query($cond1);
$n_cond1 = mysql_num_rows($q_cond1);
$cond2 = "SELECT * FROM items WHERE tense = 'cond2'"; 
$q_cond2 = mysql_query($cond2);
$n_cond2 = mysql_num_rows($q_cond2);
$cond3 = "SELECT * FROM items WHERE tense = 'cond3'"; 
$q_cond3 = mysql_query($cond3);
$n_cond3 = mysql_num_rows($q_cond3);
$future = "SELECT * FROM items WHERE tense = 'future'"; 
$q_future = mysql_query($future);
$n_future = mysql_num_rows($q_future);
$fugo = "SELECT * FROM items WHERE tense = 'fugo'"; 
$q_fugo = mysql_query($fugo);
$n_fugo = mysql_num_rows($q_fugo);
$fuprc = "SELECT * FROM items WHERE tense = 'fuprc'"; 
$q_fuprc = mysql_query($fuprc);
$n_fuprc = mysql_num_rows($q_fuprc);
$fuprs = "SELECT * FROM items WHERE tense = 'fuprs'"; 
$q_fuprs = mysql_query($fuprs);
$n_fuprs = mysql_num_rows($q_fuprs);
$fuwi = "SELECT * FROM items WHERE tense = 'fuwi'"; 
$q_fuwi = mysql_query($fuwi);
$n_fuwi = mysql_num_rows($q_fuwi);
$fupf = "SELECT * FROM items WHERE tense = 'fupf'"; 
$q_fupf = mysql_query($fupf);
$n_fupf = mysql_num_rows($q_fupf);
$fuco = "SELECT * FROM items WHERE tense = 'fuco'"; 
$q_fuco = mysql_query($fuco);
$n_fuco = mysql_num_rows($q_fuco);
$imp = "SELECT * FROM items WHERE tense = 'imp'"; 
$q_imp = mysql_query($imp);
$n_imp = mysql_num_rows($q_imp);
$past = "SELECT * FROM items WHERE tense = 'past'"; 
$q_past = mysql_query($past);
$n_past = mysql_num_rows($q_past);
$pas = "SELECT * FROM items WHERE tense = 'pas'"; 
$q_pas = mysql_query($pas);
$n_pas = mysql_num_rows($q_pas);
$pac = "SELECT * FROM items WHERE tense = 'pac'"; 
$q_pac = mysql_query($pac);
$n_pac = mysql_num_rows($q_pac);
$pps = "SELECT * FROM items WHERE tense = 'pps'"; 
$q_pps = mysql_query($pps);
$n_pps = mysql_num_rows($q_pps);
$ppc = "SELECT * FROM items WHERE tense = 'ppc'"; 
$q_ppc = mysql_query($ppc);
$n_ppc = mysql_num_rows($q_ppc);
$pas_pps = "SELECT * FROM items WHERE tense = 'pas_pps'"; 
$q_pas_pps = mysql_query($pas_pps);
$n_pas_pps = mysql_num_rows($q_pas_pps);
$pas_ppc = "SELECT * FROM items WHERE tense = 'pas_ppc'"; 
$q_pas_ppc = mysql_query($pas_ppc);
$n_pas_ppc = mysql_num_rows($q_pas_ppc);
$pps_ppc = "SELECT * FROM items WHERE tense = 'pps_ppc'"; 
$q_pps_ppc = mysql_query($pps_ppc);
$n_pps_ppc = mysql_num_rows($q_pps_ppc);
$pas_pac = "SELECT * FROM items WHERE tense = 'pas_pac'"; 
$q_pas_pac = mysql_query($pas_pac);
$n_pas_pac = mysql_num_rows($q_pas_pac);
$paps = "SELECT * FROM items WHERE tense = 'paps'"; 
$q_paps = mysql_query($paps);
$n_paps = mysql_num_rows($q_paps);
$pas_paps = "SELECT * FROM items WHERE tense = 'pas_paps'"; 
$q_pas_paps = mysql_query($pas_paps);
$n_pas_paps = mysql_num_rows($q_pas_paps);
$prs = "SELECT * FROM items WHERE tense = 'prs'"; 
$q_prs = mysql_query($prs);
$n_prs = mysql_num_rows($q_prs);
$prc = "SELECT * FROM items WHERE tense = 'prc'"; 
$q_prc = mysql_query($prc);
$n_prc = mysql_num_rows($q_prc);
$prc_prs = "SELECT * FROM items WHERE tense = 'prc_prs'"; 
$q_prc_prs = mysql_query($prc_prs);
$n_prc_prs = mysql_num_rows($q_prc_prs);
$db_total = "SELECT * FROM items"; 
$q_db_total = mysql_query($db_total);
$n_db_total = mysql_num_rows($q_db_total);
?>

<?
mysql_close($objConnect);
?>

<p align="left">
So far, <?=$n_db_total;?> exercises have been stored on the database. Please use the form below to retrieve those you need.
</p>

<br><br>

<form action="output.php" method="POST">

&#10004;&nbsp;Select the <b>grammar topic(s)</b> you want to test:<br /><br />

<table border="1" cellpadding='4' cellspacing='4' style='border-collapse: collapse' bordercolor='#826647'>
<tr>
<td bgcolor="#FFD685"><input type="checkbox" name="topic[]" value="adv"/> adverbs</td><td bgcolor="#FFD685"><?=$n_adv;?></td>
<td bgcolor="#FFDB94"><input type="checkbox" name="topic[]" value="art"/> articles</td><td bgcolor="#FFDB94"><?=$n_art;?></td>
<td bgcolor="#FFE0A3"><input type="checkbox" name="topic[]" value="be"/> to be</td><td bgcolor="#FFE0A3"><?=$n_be;?></td>
</tr>
<tr>
<td bgcolor="#D1E0FF"><input type="checkbox" name="topic[]" value="mod_can"/> can/could/be able</td><td bgcolor="#D1E0FF"><?=$n_mod_can;?></td>
<td bgcolor="#D1E0FF"><input type="checkbox" name="topic[]" value="mod_may"/> may/might</td><td bgcolor="#D1E0FF"><?=$n_mod_may;?></td>
<td bgcolor="#D1E0FF"><input type="checkbox" name="topic[]" value="mod_mus_hav"/> must/have to</td><td bgcolor="#D1E0FF"><?=$n_mod_mus_hav;?></td>
</tr>
<tr>
<td bgcolor="#D1E0FF"><input type="checkbox" name="topic[]" value="mod_sho"/> shall/should/ought to</td><td bgcolor="#D1E0FF"><?=$n_mod_sho;?></td>
<td bgcolor="#D1E0FF"><input type="checkbox" name="topic[]" value="mod_will"/> will/would</td><td bgcolor="#D1E0FF"><?=$n_mod_will;?></td>
<td bgcolor="#D1E0FF"><input type="checkbox" name="topic[]" value="mod_mix"/> mixed modals</td><td bgcolor="#D1E0FF"><?=$n_mod_mix;?></td>
</tr>
<tr>
<td bgcolor="#B4D3FF"><input type="checkbox" name="topic[]" value="com_sup"/> comparatives/superlative</td><td bgcolor="#B4D3FF"><?=$n_com_sup;?></td>
<td bgcolor="#D6D6C2"><input type="checkbox" name="topic[]" value="sp"/> singular/plural</td><td bgcolor="#D6D6C2"><?=$n_sp;?></td>
<td bgcolor="#D6D6C2"><input type="checkbox" name="topic[]" value="counta"/> countable/uncountable</td><td bgcolor="#D6D6C2"><?=$n_counta;?></td>
</tr>
<tr>
<td bgcolor="#D6D6C2"><input type="checkbox" name="topic[]" value="quanti"/> quantifiers</td><td bgcolor="#D6D6C2"><?=$n_quanti;?></td>
<td bgcolor="#D6D6C2"><input type="checkbox" name="topic[]" value="indep"/> indefinite pronouns</td><td bgcolor="#D6D6C2"><?=$n_indep;?></td>
<td bgcolor="#EBEBE0"><input type="checkbox" name="topic[]" value="inf_ger_null"/> infinitive forms</td><td bgcolor="#EBEBE0"><?=$n_inf_ger_null;?></td>
</tr>
<tr>
<td bgcolor="#FFEBF5"><input type="checkbox" name="topic[]" value="link"/> linkers</td><td bgcolor="#FFEBF5"><?=$n_link;?></td>
<td bgcolor="#FFE0F0"><input type="checkbox" name="topic[]" value="passi"/> passive voice</td><td bgcolor="#FFE0F0"><?=$n_passi;?></td>
<td bgcolor="#FFCCE6"><input type="checkbox" name="topic[]" value="per_pro"/> personal pronouns</td><td bgcolor="#FFCCE6"><?=$n_per_pro;?></td>
</tr>
<tr>
<td bgcolor="#FFCCE6"><input type="checkbox" name="topic[]" value="pos_adj"/> possessive adjectives</td><td bgcolor="#FFCCE6"><?=$n_pos_adj;?></td>
<td bgcolor="#FFCCE6"><input type="checkbox" name="topic[]" value="adj_pos_pro_per"/> poss. adj./pers. pro.</td><td bgcolor="#FFCCE6"><?=$n_pos_adj_per_pro;?></td>
<td bgcolor="#FFCCE6"><input type="checkbox" name="topic[]" value="pro_pos"/> possessive pronouns</td><td bgcolor="#FFCCE6"><?=$n_pro_pos;?></td>
</tr>
<tr>
<td bgcolor="#FFCCE6"><input type="checkbox" name="topic[]" value="rel"/> relative pronouns</td><td bgcolor="#FFCCE6"><?=$n_rel;?></td>
<td bgcolor="#D6C299"><input type="checkbox" name="topic[]" value="gen"/> possessive form</td><td bgcolor="#D6C299"><?=$n_gen;?></td>
<td bgcolor="#E0D1B2"><input type="checkbox" name="topic[]" value="prep_pla"/> prepositions of place</td><td bgcolor="#E0D1B2"><?=$n_prep_pla;?></td>
</tr>
<tr>
<td bgcolor="#E0D1B2"><input type="checkbox" name="topic[]" value="prep_tim"/> prepositions of time</td><td bgcolor="#E0D1B2"><?=$n_prep_tim;?></td>
<td bgcolor="#FFEBC2"><input type="checkbox" name="topic[]" value="aux"/> auxiliary verbs</td><td bgcolor="#FFEBC2"><?=$n_aux;?></td>
<td bgcolor="#FFEBC2"><input type="checkbox" name="topic[]" value="short"/> short answers</td><td bgcolor="#FFEBC2"><?=$n_short;?></td>
</tr>
<tr>
<td bgcolor="#FFEBC2"><input type="checkbox" name="topic[]" value="qtag"/> question tags</td><td bgcolor="#FFEBC2"><?=$n_qtag;?></td>
<td bgcolor="#FFE0A3"><input type="checkbox" name="topic[]" value="repo"/> reported speech</td><td bgcolor="#FFE0A3"><?=$n_repo;?></td>
<td bgcolor="#DBDBFF"><input type="checkbox" name="topic[]" value="used"/> used to</td><td bgcolor="#DBDBFF"><?=$n_used;?></td>
</tr>
<tr>
<td bgcolor="#D6F8C2"><input type="checkbox" name="topic[]" value="wh"/> wh- words</td><td bgcolor="#D6F8C2"><?=$n_wh;?></td>
<td bgcolor="#EBFDF3"><input type="checkbox" name="topic[]" value="tense"/> tenses</td><td bgcolor="#EBFDF3"><?=$n_tense;?></td>
<td bgcolor="#EBEBFF"><input type="checkbox" name="topic[]" value="mixed"/> mixed topics</td><td bgcolor="#EBEBFF"><?=$n_mixed;?></td>
</tr>
</table>

<br /><br />

&#10004;&nbsp;Select the <b>tense(s)</b> you want to focus on (&nbsp;<input type="checkbox" onClick="toggle(this)" /> toggle all&nbsp;):<br /><br />

<table border="1" cellpadding='4' cellspacing='4' style='border-collapse: collapse' bordercolor='#826647'>
<tr>
<td bgcolor="#c2e0c2"><input type="checkbox" name="tense[]" value="prs"/> Present Simple</td><td bgcolor="#c2e0c2"><?=$n_prs;?></td>
<td bgcolor="#c2e0c2"><input type="checkbox" name="tense[]" value="prc"/> Present Continuous</td><td bgcolor="#c2e0c2"><?=$n_prc;?></td>
<td bgcolor="#c2e0c2"><input type="checkbox" name="tense[]" value="prc_prs"/> Present Simp. - Cont.</td><td bgcolor="#c2e0c2"><?=$n_prc_prs;?></td>
</tr>
<tr>
<td bgcolor="#c2e0c2"><input type="checkbox" name="tense[]" value="fuprs"/> future - Pres. Simp.</td><td bgcolor="#c2e0c2"><?=$n_fuprs;?></td>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="past"/> past tenses (mixed)</td><td bgcolor="#fff5cc"><?=$n_past;?></td>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="pas"/> Past Simple</td><td bgcolor="#fff5cc"><?=$n_pas;?></td>
</tr>
<tr>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="pac"/> Past Continuous</td><td bgcolor="#fff5cc"><?=$n_pac;?></td>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="pps"/> Pres. Perfect Simple</td><td bgcolor="#fff5cc"><?=$n_pps;?></td>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="ppc"/> Pres. Perfect Contin.</td><td bgcolor="#fff5cc"><?=$n_ppc;?></td>
</tr>
<tr>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="pas_pps"/> Past Simple - PPS</td><td bgcolor="#fff5cc"><?=$n_pas_pps;?></td>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="pas_ppc"/> Past Simple - PPC</td><td bgcolor="#fff5cc"><?=$n_pas_ppc;?></td>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="pps_ppc"/> Pres. Perfect Sim. - Con.</td><td bgcolor="#fff5cc"><?=$n_pps_ppc;?></td>
</tr>
<tr>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="pas_pac"/> Past Simple - Cont.</td><td bgcolor="#fff5cc"><?=$n_pas_pac;?></td>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="paps"/> Past Perfect Simple</td><td bgcolor="#fff5cc"><?=$n_paps;?></td>
<td bgcolor="#fff5cc"><input type="checkbox" name="tense[]" value="pas_paps"/> Past Simple - Past Perfect</td><td bgcolor="#fff5cc"><?=$n_pas_paps;?></td>
</tr>
<tr>
<td bgcolor="#ffd1b2"><input type="checkbox" name="tense[]" value="cond"/> if-clauses (mixed) </td><td bgcolor="#ffd1b2"><?=$n_cond;?></td>
<td bgcolor="#ffd1b2"><input type="checkbox" name="tense[]" value="cond0"/> 0 conditional</td><td bgcolor="#ffd1b2"><?=$n_cond0;?></td>
<td bgcolor="#ffd1b2"><input type="checkbox" name="tense[]" value="cond1"/> 1st conditional</td><td bgcolor="#ffd1b2"><?=$n_cond1;?></td>
</tr>
<tr>
<td bgcolor="#ffd1b2"><input type="checkbox" name="tense[]" value="cond2"/> 2nd conditional</td><td bgcolor="#ffd1b2"><?=$n_cond2;?></td>
<td bgcolor="#ffd1b2"><input type="checkbox" name="tense[]" value="cond3"/> 3rd conditional</td><td bgcolor="#ffd1b2"><?=$n_cond3;?></td>
<td bgcolor="#ffad99"><input type="checkbox" name="tense[]" value="future"/> future forms (mixed)</td><td bgcolor="#ffad99"><?=$n_future;?></td>
</tr>
<tr>
<td bgcolor="#ffad99"><input type="checkbox" name="tense[]" value="fuwi"/> Future - will</td><td bgcolor="#ffad99"><?=$n_fuwi;?></td>
<td bgcolor="#ffad99"><input type="checkbox" name="tense[]" value="fugo"/> Future - going to</td><td bgcolor="#ffad99"><?=$n_fugo;?></td>
<td bgcolor="#ffad99"><input type="checkbox" name="tense[]" value="fuprc"/> Future - Pres. Cont.</td><td bgcolor="#ffad99"><?=$n_fuprc;?></td>
</tr>
<tr>
<td bgcolor="#ffad99"><input type="checkbox" name="tense[]" value="fupf"/> Future Perfect</td><td bgcolor="#ffad99"><?=$n_fupf;?></td>
<td bgcolor="#ffad99"><input type="checkbox" name="tense[]" value="fuco"/> Future Continuous</td><td bgcolor="#ffad99"><?=$n_fuco;?></td>
<td bgcolor="#bed3aa"><input type="checkbox" name="tense[]" value="imp"/> Imperative</td><td bgcolor="#bed3aa"><?=$n_imp;?></td>
</tr>
<tr>
<td bgcolor="#d1e0ff"><input type="checkbox" name="tense[]" value="mix"/> mixed tenses</td><td bgcolor="#d1e0ff"><?=$n_mix;?></td>
<td></td><td></td>
<td></td><td></td>
</tr>
</table>

<br /><br />

&#10004;&nbsp;Select the <b>type(s) of exercise</b> you need:<br /><br />

<table border="1" cellpadding='4' cellspacing='4' style='border-collapse: collapse' bordercolor='#826647'>
<tr>
<td bgcolor="#f1fcff"><input type="checkbox" name="type[]" value="cloze"/> cloze</td><td bgcolor="#f1fcff"><?=$n_cloze;?></td>
</tr>
<tr>
<td bgcolor="#fff6f1"><input type="checkbox" name="type[]" value="abc"/> multiple choice</td><td bgcolor="#fff6f1"><?=$n_abc;?></td>
</tr>
<tr>
<td bgcolor="#f1fcff"><input type="checkbox" name="type[]" value="error"/> mistake correction</td><td bgcolor="#f1fcff"><?=$n_error;?></td>
</tr>
<tr>
<td bgcolor="#fff6f1"><input type="checkbox" name="type[]" value="makeq"/> ask questions</td><td bgcolor="#fff6f1"><?=$n_makeq;?></td>
</tr>
<tr>
<td bgcolor="#fff6f1"><input type="checkbox" name="type[]" value="write"/> (re)write sentences</td><td bgcolor="#fff6f1"><?=$n_write;?></td>
</tr>
</table>

<p align="center">
<input type="submit" name= "get" value="get your exercises!"/>
</p>

</form>

</body>
</html>
