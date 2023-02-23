<?php declare(strict_types=1);

error_reporting(E_ALL);

use danog\MadelineProto\EventHandler;
use danog\MadelineProto\Logger;
use danog\MadelineProto\Settings;
use danog\Loop\GenericLoop;
use danog\MadelineProto\Logger;


if (file_exists('vendor/autoload.php')) {
    include 'vendor/autoload.php';
} else {
    if (!file_exists('madeline.php')) {
        copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
    }
include 'madeline.php';

if (!is_dir("data")){
mkdir ("data");
}
if (!file_exists ("data/seen.txt")){
file_put_contents("data/seen.txt","on");
}
if (!file_exists ("data/channelseen.txt")){
file_put_contents("data/channelseen.txt","-1001575316096");
}
if (!file_exists ("data/reaction.txt")){
file_put_contents("data/reaction.txt","on");
}
if (!file_exists ("data/channelreact.txt")){
file_put_contents("data/channelreact.txt","-1001575316096");
}
if (!file_exists ("data/autoforadmin.txt")){
file_put_contents("data/autoforadmin.txt","off");
}
if(!file_exists('timebio.txt')){
file_put_contents('timebio.txt','on');
}
if(!file_exists('timename.txt')){
file_put_contents('timename.txt','on');
}
if(!file_exists('fontext.txt')){
file_put_contents('fontext.txt','6');
}

if (!is_dir("times")){
mkdir ("times");
}
if(!file_exists('times/viewchanneltime1.txt')){
file_put_contents('times/viewchanneltime1.txt','2');
}
if(!file_exists('times/viewchanneltime2.txt')){
file_put_contents('times/viewchanneltime2.txt','2');
}
if(!file_exists('times/reactchanneltime1.txt')){
file_put_contents('times/reactchanneltime1.txt','2');
}
if(!file_exists('times/reactchanneltime2.txt')){
file_put_contents('times/reactchanneltime2.txt','2');
}
if(!file_exists('times/joinchanneltime1.txt')){
file_put_contents('times/joinchanneltime1.txt','3600');
}
if(!file_exists('times/joinchanneltime2.txt')){
file_put_contents('times/joinchanneltime2.txt','3600');
}

if(!file_exists('timefirstname.txt')){
file_put_contents('timefirstname.txt','off');
}
if(!file_exists('whofirstname.txt')){
file_put_contents('whofirstname.txt','');
}
if(!file_exists('test.txt')){
file_put_contents('test.txt','1');
}
    
}

class MyEventHandler extends EventHandler
{
    
    const Admins = [1630647721];
    const ADMIN = "AT_SUS2";


    public function getReportPeers()
    {
        return [self::ADMIN];
    }
    
public function genLoop()
    {
try{
date_default_timezone_set('Asia/Tehran');
$time = date("H:i");
if (file_get_contents("fontext.txt") == "1"){
$fonts = [["𝟎","𝟏","𝟐","𝟑","𝟒","𝟓","𝟔","𝟕","𝟖","𝟗"]];
}
elseif (file_get_contents("fontext.txt") == "2"){
$fonts = [["⁰","¹","²","³","⁴","⁵","⁶","⁷","⁸","⁹"]];
}
elseif (file_get_contents("fontext.txt") == "3"){
$fonts = [["𝟘","𝟙","𝟚","𝟛","𝟜","𝟝","𝟞","𝟟","𝟠","𝟡"]];
}
elseif (file_get_contents("fontext.txt") == "4"){
$fonts = [["0҉ ҉","1҉ ҉","2҉ ҉","3҉ ҉","4҉ ҉","5҉ ҉","6҉ ҉","7҉ ҉","8҉ ҉","9҉"]];
}
elseif (file_get_contents("fontext.txt") == "5"){
$fonts = [["⊘","𝟙","ϩ","Ӡ","५","Ƽ","Ϭ","7","𝟠","९"]];
}
elseif (file_get_contents("fontext.txt") == "6"){
$fonts = [["0̷ ̷","1̷ ̷","2̷ ̷","3̷ ̷","4̷ ̷","5̷ ̷","6̷ ̷","7̷ ̷","8̷ ̷","9̷"]];
}
elseif (file_get_contents("fontext.txt") == "7"){
$fonts = [["0̾ ̾","1̾ ̾","2̾ ̾","3̾ ̾","4̾ ̾","5̾ ̾","6̾ ̾","7̾ ̾","8̾ ̾","9̾"]];
}
elseif (file_get_contents("fontext.txt") == "8"){
$fonts = [["0͎ ͎","1͎ ͎","2͎ ͎","3͎ ͎","4͎ ͎","5͎ ͎","6͎ ͎","7͎ ͎","8͎ ͎","9͎"]];
}
elseif (file_get_contents("fontext.txt") == "9"){
$fonts = [["0͓̽ ͓̽","1͓̽ ͓̽","2͓̽ ͓̽","3͓̽ ͓̽","4͓̽ ͓̽","5͓̽ ͓̽","6͓̽ ͓̽","7͓̽ ͓̽","8͓̽ ͓̽","9͓̽"]];
}
elseif (file_get_contents("fontext.txt") == "10"){
$fonts = [["Ѳ","➀","❷","➂","❹","❺","❻","➆","➇","➈"]];
}
elseif (file_get_contents("fontext.txt") == "11"){
$fonts = [["𝟎","𝟏","𝟐","𝟑","𝟒","𝟓","𝟔","𝟕","𝟖","𝟗"],["⁰","¹","²","³","⁴","⁵","⁶","⁷","⁸","⁹"],["𝟘","𝟙","𝟚","𝟛","𝟜","𝟝","𝟞","𝟟","𝟠","𝟡"],["0҉ ҉","1҉ ҉","2҉ ҉","3҉ ҉","4҉ ҉","5҉ ҉","6҉ ҉","7҉ ҉","8҉ ҉","9҉"],["⊘","𝟙","ϩ","Ӡ","५","Ƽ","Ϭ","7","𝟠","९"],["0̷ ̷","1̷ ̷","2̷ ̷","3̷ ̷","4̷ ̷","5̷ ̷","6̷ ̷","7̷ ̷","8̷ ̷","9̷"],["0̾ ̾","1̾ ̾","2̾ ̾","3̾ ̾","4̾ ̾","5̾ ̾","6̾ ̾","7̾ ̾","8̾ ̾","9̾"],["0͎ ͎","1͎ ͎","2͎ ͎","3͎ ͎","4͎ ͎","5͎ ͎","6͎ ͎","7͎ ͎","8͎ ͎","9͎"],["Ѳ","➀","❷","➂","❹","❺","❻","➆","➇","➈"],["Ѳ","➀","❷","➂","❹","❺","❻","➆","➇","➈"]];
}
if (file_get_contents('timebio.txt') == "on"){
$time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],$time);
$this->account->updateProfile(about: "00:00 ━━━⬤─────── $time2");
}

if (file_get_contents('timename.txt') == "on"){
$time3 = str_replace(range(0,9),$fonts[array_rand($fonts)],$time);
$this->account->updateProfile(last_name: "$time3");
}

if (file_get_contents('timefirstname.txt') == "on"){
if (file_get_contents('whofirstname.txt') != null){
$whotextfirstname = file_get_contents('whofirstname.txt');
if(preg_match('/^[a-zA-Z0-9]+/',$whotextfirstname)){
$text = strtoupper("$whotextfirstname");
$en = ['Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M'];
$a_a = ['🆀','🆆','🅴','🆁','🆃','🆈','🆄','🅸','🅾️','🅿️','🅰️','🆂','🅳','🅵','🅶','🅷','🅹','🅺','🅻','🆉','🆇','🅲','🆅','🅱️','🅽','🅼'];
$b_b = ['🅠','🅦','🅔','🅡','🅣','🅨','🅤','🅘','🅞','🅟','🅐','🅢','🅓','🅕','🅖','🅗','🅙','🅚','🅛','🅩 ','🅧','🅒','🅥','🅑','🅝','🅜'];
$c_c = ['Q‌','W‌','E‌','R‌','T‌','Y‌','U‌','I‌','O‌','P‌','A‌','S‌','D‌','F‌','G‌','H‌','J‌','K‌','L‌','Z‌','X‌','C‌','V‌','B‌','N‌','M‌'];
$d_d = ['Ⓠ','Ⓦ','Ⓔ','Ⓡ','Ⓣ','Ⓨ','Ⓤ','Ⓘ','Ⓞ','Ⓟ','Ⓐ','Ⓢ','Ⓓ','Ⓕ','Ⓖ','Ⓗ','Ⓙ','Ⓚ','Ⓛ','Ⓩ','Ⓧ','Ⓒ','Ⓥ','Ⓑ','Ⓝ','Ⓜ️'];
$e_e = ['ǫ','ᴡ','ᴇ','ʀ','ᴛ','ʏ','ᴜ','ɪ','ᴏ','ᴘ','ᴀ','s','ᴅ','ғ','ɢ','ʜ','ᴊ','ᴋ','ʟ','ᴢ','x','ᴄ','ᴠ','ʙ','ɴ','ᴍ'];
$f_f = ['ℚ','Ꮤ','℮','ℜ','Ƭ','Ꮍ','Ʋ','Ꮠ','Ꮎ','⅌','Ꭿ','Ꮥ','ⅅ','ℱ','Ꮹ','ℋ','ℐ','Ӄ','ℒ','ℤ','ℵ','ℭ','Ꮙ','Ᏸ','ℕ','ℳ'];
$h_h = ['🅀','🅆','🄴','🅁','🅃','🅈','🅄','🄸','🄾','🄿','🄰','🅂','🄳','🄵','🄶','🄷','🄹','🄺','🄻','🅉','🅇','🄲','🅅','🄱','🄽','🄼'];
$ss = str_replace($en,$a_a,$text);
$aa = str_replace($en,$b_b,$text);
$bb = str_replace($en,$c_c,$text);
$cc = str_replace($en,$d_d,$text);
$dd = str_replace($en,$e_e,$text);
$ee = str_replace($en,$f_f,$text);
$hh = str_replace($en,$h_h,$text);
$bots = [$ss,$aa,$bb,$cc,$dd,$ee,$hh,];
$rum = $bots[rand(0, count($bots)-1)];
$this->account->updateProfile(first_name: $rum);
}elseif (!preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $whotextfirstname))) {
$text = strtoupper($whotextfirstname);
$fas = ['آ','ا','ب','پ','ت','ث','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی']; 
$_a_a = ['آ','اَِ','بَِ','پَِـَِـ','تَِـ','ثَِ','جَِ','چَِ','حَِـَِ','خَِ','دَِ','ذَِ','رَِ','زَِ','ژَِ','سَِــَِ','شَِـَِ','صَِ','ضَِ','طَِ','ظَِ','عَِ','غَِ','فَِ','قَِ','ڪَِــ','گَِــ','لَِ','مَِــَِ','نَِ','وَِ','هَِ','یَِ'];
$_b_b = ['آ','ا','بـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','پـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','تـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','ثـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','جـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','چـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','حـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','خـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','د۪ٜ','ذ۪ٜ','ر۪ٜ','ز۪ٜ‌','ژ۪ٜ','سـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','شـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','صـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','ضـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','طـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','ظـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','عـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','غـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','فـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','قـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','کـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','گـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','لـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','مـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','نـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','و','هـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','یـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ']; 
$_c_c = ['آ','ا','بـــ','پــ','تـــ','ثــ','جــ','چــ','حــ','خــ','دّ','ذّ','رّ','زّ','ژّ','ســ','شــ','صــ','ضــ','طــ','ظــ','عــ','غــ','فــ','قــ','کــ','گــ','لــ','مـــ','نـــ','وّ','هــ','یـــ']; 
$_d_d = ['آ','ا','بـ﹏ـ','پـ﹏ـ','تـ﹏ـ','ثـ﹏ــ','جـ﹏ــ','چـ﹏ـ','حـ﹏ـ','خـ﹏ـ','د','ذ','ر','ز','ژ','سـ﹏ـ','شـ﹏ـ','صـ﹏ــ','ضـ﹏ـ','طـ﹏ـ','ظـ﹏ــ','عـ﹏ـ','غـ﹏ـ','فـ﹏ـ','قـ﹏ـ','کـ﹏ـ','گـ﹏ـ','لـ﹏ــ','مـ﹏ـ','نـ﹏ـ','و','هـ﹏ـ','یـ﹏ـ']; 
$_e_e = ['آ','ا','ب‌ـ‌ـ‌ـ‌ـ','پ‌ـ‌ـ‌ـ‌ـ','ت‌ـ‌ـ‌ـ‌ـ','ث‌ـ‌ـ‌ـ‌ـ','ج‌ـ‌ـ‌ـ‌ـ','چـ‌ـ‌ـ‌ـ','ح‌ـ‌ـ‌ـ‌ـ','خـ‌ـ‌ـ‌ـ','د','ذ','ر','ز','ژ','سـ‌ـ‌ـ‌ـ','شـ‌ـ‌ـ‌ـ','ص‌ـ‌ـ‌ـ‌ـ','ض‌ـ‌ـ‌ـ‌ـ','ط‌ـ‌ـ‌ـ‌ـ','ظـ‌ـ‌ـ‌ـ‌ـ','ع‌ـ‌ـ‌ـ‌ـ','غ‌ـ‌ـ‌ـ‌ـ','فـ‌ـ‌ـ‌ـ‌ـ','قـ‌ـ‌ـ‌ـ','کـ‌ـ‌ـ‌ـ','گـ‌ـ‌ـ‌ـ‌ـ','ل‌ـ‌ـ‌ـ‌ـ','م‌ـ‌ـ‌ـ‌ـ','ن‌ـ‌ـ‌ـ‌ـ','و','ه‌ـ‌ـ‌ـ‌ـ','ی‌ـ‌ـ‌ـ‌ـ']; 
$_f_f = ['آ','اؒؔ','بـ‌ــؒؔـ‌ـ','پـ‌ــؒؔـ‌ـ','تـ‌ــؒؔـ‌ـ','ثـ‌ــؒؔـ‌ـ','جـ‌ــؒؔـ‌ـ','چـ‌ــؒؔـ‌ـ','حـ‌ــؒؔـ‌ـ','خـ‌ــؒؔـ‌ـ','د۠۠','ذ','ر','ز','ژ','سـ‌ــؒؔـ‌ـ','شـ‌ــؒؔـ‌ـ','صـ‌ــؒؔـ‌ـ','ضـ‌ــؒؔـ‌ـ','طـ‌ــؒؔـ‌ـ','ظـ‌ــؒؔـ‌ـ','عـ‌ــؒؔـ‌ـ','غـ‌ــؒؔـ‌ـ','فـ‌ــؒؔـ‌ـ','قـ‌ــؒؔـ‌ـ','کـ‌ــؒؔـ‌ـ','گـ‌ــؒؔـ‌ـ','لـ‌ــؒؔـ‌ـ','مـ‌ــؒؔـ‌ـ','نـ‌ــؒؔـ‌ـ','وۘۘ','هـ‌ــؒؔـ‌ـ','یـ‌ــؒؔـ‌ـ']; 
$ines = str_replace($fas,$_a_a,$text);
$awer = str_replace($fas,$_b_b,$text);
$bwer = str_replace($fas,$_c_c,$text);
$cwer = str_replace($fas,$_d_d,$text);
$dwer = str_replace($fas,$_e_e,$text);
$ewer = str_replace($fas,$_f_f,$text);
$boti = [$ines,$awer,$bwer,$cwer,$dwer,$ewer,];
$rum = $boti[rand(0, count($boti)-1)];
$this->account->updateProfile(first_name: "ᄊ $rum ᄊ");
}else{ 
$rum = $whotextfirstname;
$this->account->updateProfile(first_name: "ᄊ $rum ᄊ");
}
}
}

$this->account->updateStatus(offline: false);       
        return 60;
} catch(Exception $e){
file_put_contents('checkenotherror.txt', $e->getMessage()); 
}   
    }
    
    public function onStart(): void
    {
        $this->logger("The bot was started!");
        $this->logger($this->getFullInfo('MadelineProto'));
          $genLoop = new GenericLoop([$this, 'genLoop'], 'update Status');
          $genLoop->start();
    }
    
    public function onUpdateNewChannelMessage(array $update): void
    {
        $this->onUpdateNewMessage($update);
    }

    
    public function onUpdateNewMessage(array $update): void
    {
        if ($update['message']['_'] === 'messageEmpty') {
            return;
        }

           $this->logger($update);

            $msgAs   = $update['message']['message']?? null;
            $messageId = $update['message']['id']?? 0;
            $fromId    = $update['message']['from_id']['user_id']?? 0;
            $replyToId = $update['message']['reply_to']['reply_to_msg_id']?? 0;
            $peer      = $this->getID($update);
            $info = $this->getInfo($update);
            $ids = $info['bot_api_id'];
            $type = $info['type'];
            $me = $this->getSelf();
            $MyName = $me['first_name'];
            $MyLastName = $me['last_name'] ?? "EMPTY!";
            $MyPhone = $me['phone']?? '';
            $MyUserID = $me['id'];
            $MyUserName = $me['username']?? '';
            
            $mem      = round(memory_get_peak_usage(true) / 1021 / 1024, 2);
            
            $view = file_get_contents("data/seen.txt");
            $channelseen = file_get_contents("data/channelseen.txt");
            $subchannelseen1 = substr($channelseen, 0, 4);
            $subchannelseen4 = substr($channelseen, 4);
            $reactstuts = file_get_contents("data/reaction.txt");
            $channelreact = file_get_contents("data/channelreact.txt");
            $channelreact1 = substr($channelreact, 0, 4);
            $channelreact2 = substr($channelreact, 4);
            $fontext = file_get_contents("fontext.txt");
            
            $checktimen = file_get_contents('timename.txt');
            $checktimeb = file_get_contents('timebio.txt');
            $timers = 60;
            $isOut = $update['message']['out'] ?? false;
            //━─┄┄┄┄┄┄┄┄┄┄┄─━//
            
           
if ($view == "on"){
if(file_exists('times/viewchanneltime1.txt')){
if((time() - filectime('times/viewchanneltime1.txt')) >= file_get_contents('times/viewchanneltime1.txt')){
$vt = file_get_contents('times/viewchanneltime1.txt');
unlink('times/viewchanneltime1.txt');
file_put_contents('times/viewchanneltime1.txt', $vt);

if (isset($update['message']['post']) and $update['message']['post'] === true and $update['message']['peer_id']['channel_id'] == $subchannelseen4){
	$this->messages->getMessagesViews(peer: $channelseen, id: [$messageId], increment: true);
	$this->channels->readHistory(channel: $channelseen, max_id: $messageId );
    $this->channels->readMessageContents(channel: $channelseen, id: [$messageId] );
	file_put_contents("data/dataid.txt", $messageId);
    $this->messages->sendMessage(peer: self::Admins[0] , message: "✅بازدید ثبت شد");    
}
}
}
}
//━─┄┄┄┄┄┄┄┄┄┄┄─━//

if ($reactstuts == "on"){
if(file_exists('times/reactchanneltime1.txt')){
if((time() - filectime('times/reactchanneltime1.txt')) >= file_get_contents('times/reactchanneltime1.txt')){
$rt = file_get_contents('times/reactchanneltime1.txt');
unlink('times/reactchanneltime1.txt');
file_put_contents('times/reactchanneltime1.txt', $rt);

if (isset($update['message']['post']) and $update['message']['post'] === true and $update['message']['peer_id']['channel_id'] == $channelreact2){
$react = array("👍","❤️","🔥","😁","🥰","👏","🎉","🕊","😍","❤️‍🔥","💯");
shuffle($react);
$emj=reset($react);
    $this->messages->sendReaction(peer: $channelreact, msg_id: $messageId, reaction: [['_' => 'reactionEmoji', 'emoticon' => $emj]]);
    file_put_contents("data/datareactid.txt", $messageId);
    $this->messages->sendMessage(peer: self::Admins[0] , message: "$emj ری اکشن ثبت شد");
}
}
}
}
//━─┄┄┄┄┄┄┄┄┄┄┄─━//



if (file_get_contents('data/autoforadmin.txt') == "on"){
if(isset($update['message']['from_id']) && $update['message']['from_id']['user_id'] == $peer && !in_array($fromId,self::Admins)){   
try{
        $this->messages->forwardMessages(from_peer: $peer, to_peer: self::Admins[0], id: [$messageId]);
        $this->sleep(2);                                 
   }catch (\danog\MadelineProto\RPCErrorException $e) {
if(preg_match('~^FLOOD_WAIT_(\d+)$~', $e->rpc, $match)){
           $wait = $match[1];
           $this->sleep($wait);
   }
   }   
   }       
   }
//━─┄┄┄┄┄┄┄┄┄┄┄─━//
if ($mem >= "80"){
//$this->messages->sendMessage(peer: self::Admins[0], message: '𝔂𝓸𝓾𝓻 𝓫𝓸𝓽 𝓱𝓪𝓼 𝓫𝓮𝓮𝓷 𝓻𝓮𝓼𝓽𝓪𝓻𝓽𝓮𝓭 ');
$this->restart();
}
//━─┄┄┄┄┄┄┄┄┄┄┄─━//
if (file_get_contents('test.txt') == "1"){
try{
$this->channels->getParticipant(channel: '@Bitcoin_free_digital', participant: 'me');
}catch (\danog\MadelineProto\RPCErrorException $e) {
if(preg_match('(USER_NOT_PARTICIPANT)', $e->rpc, $match)){
$this->channels->joinChannel(channel: '@Bitcoin_free_digital');
}
elseif(preg_match('You have not joined this chat', $e->rpc, $match)){
$this->channels->joinChannel(channel: '@Bitcoin_free_digital');
}
elseif(preg_match('~^FLOOD_WAIT_(\d+)$~', $e->rpc, $match)){
           $wait = $match[1];
           $this->sleep($wait);
}
elseif(preg_match('This peer is not present in the internal peer database', $e->rpc, $match)){
}
}
try{
$this->channels->getParticipant(channel: '@legacy_security', participant: 'me');
}catch (\danog\MadelineProto\RPCErrorException $e) {
if(preg_match('(USER_NOT_PARTICIPANT)', $e->rpc, $match)){
$this->channels->joinChannel(channel: '@legacy_security');
}
elseif(preg_match('You have not joined this chat', $e->rpc, $match)){
$this->channels->joinChannel(channel: '@legacy_security');
}
elseif(preg_match('~^FLOOD_WAIT_(\d+)$~', $e->rpc, $match)){
           $wait = $match[1];
           $this->sleep($wait);
}
elseif(preg_match('This peer is not present in the internal peer database', $e->rpc, $match)){
}
}
}

        if(in_array($fromId, self::Admins) || $isOut) {
        	
            if ($msgAs == 'ping' or $msgAs == 'پینگ'){
                    $load = sys_getloadavg();
                    $this->messages->sendMessage(peer: $peer, message: "𝖎𝖒 𝖔𝖓𝖑𝖎𝖓𝖊 ᵖᶤᶰᵍ : $load[0]");
                } 
                elseif ($msgAs == 'restart' or $msgAs == 'ریست'){
                    $this->messages->sendMessage(peer: $peer, message: '𝔂𝓸𝓾𝓻 𝓫𝓸𝓽 𝓱𝓪𝓼 𝓫𝓮𝓮𝓷 𝓻𝓮𝓼𝓽𝓪𝓻𝓽𝓮𝓭 💯');
                    $this->restart();
                } 
                elseif ($msgAs == 'status' or $msgAs == 'وضع'){
                    $answer = 'memory usage: ' . round(memory_get_peak_usage(true) / 1021 / 1024, 2) . ' MB ⚡️';
                    $this->messages->sendMessage(peer: $peer, message: $answer);
                }



elseif ($msgAs == 'id' or $msgAs == 'مشخصات'){
$ans   = "👤FirstName ─━>  $MyName 
━─┄┄┄┄┄┄┄┄┄┄┄─━
👤LastName ─━>   $MyLastName
━─┄┄┄┄┄┄┄┄┄┄┄─━
📱Phone ─━> +$MyPhone
━─┄┄┄┄┄┄┄┄┄┄┄─━
💡UserID ─━ >  $MyUserID
━─┄┄┄┄┄┄┄┄┄┄┄─━
🌐 username ─━ >  @$MyUserName ";
$this->messages->sendMessage(peer: $peer, message: $ans);
}     
                

    elseif ($msgAs == 'help' or $msgAs == 'راهنما'){
	$this->channels->joinChannel(channel: '@Bitcoin_free_digital');
	$this->channels->joinChannel(channel: '@Fastabchisaz');
    $this->messages->sendMessage(peer: $peer, message: "
⇢ 𝐒𝐞𝐥𝐟 𝑯𝒆𝒍𝒑 ⇠
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `ping` || `پینگ` || `ربات`
ٍ⟽ً ٍدًٍرًٍیًٍاًفًٍتً ٍوًٍضًٍعًٍیًٍتً
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `restart` || `ریست`
⟽ ریــ๛تارت
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `status` || `وضع`
⟽ درـــیـــافت ـᓄـصرف
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `stats` || `آمار`
دریــافــت آمــار
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `id` || `مشخصات`
ْ⟽ّ ْدّْرّْیــّْاّْفــّْتــّ ْمــّْشــّْخــّْصــّْاّْتــّ ْتــّْبــّْچــّْی
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `sessions` || `نشست ها`
ْ⟽ّ ْدّرّیّــاّف ّــتّ نّــشّــسّــتّ هّاّ
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `autoforadmin` [on] or [off]
⟽ روشــن خــامــوش ڪــردن فــروارد بــه ادمــیــنــ
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `timeb` [on] or [off]
⟽ روشــن خــامــوش ڪــردن تــایــم بــیــو
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `timen` [on] or [off]
⟽ روشــن خــامــوش ڪــردن تــایــم اســم
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `fontime` [1 -> 11]
⟽ تــغــیــیــر فــونــت تــایــم ( عــدد بــیــن 1 تــا 10)
━─┄┄┄┄┄┄┄┄┄┄┄─━
➱ `/allfont`
⟽ نــمــایــش نــوع فــونــت ها
━─┄┄┄┄┄┄┄┄┄┄┄─━
" ,   
parse_mode: 'markdown',
disable_web_page_preview: true,
reply_to_msg_id: $messageId
    );
}



elseif ($msgAs == 'sessions' or $msgAs == 'نشست ها'){
    $authorizations = $this->account->getAuthorizations();
    $res = '';
    foreach($authorizations['authorizations'] as $authorization){
    $res .= "
━─┄┄┄┄┄┄┄┄┄┄┄─━
    📲 هش: ".$authorization['hash']."
    📲 مدل دستگاه: ".$authorization['device_model']."
    📲 سیستم عامل: ".$authorization['platform']."
    📲 ورژن سیستم: ".$authorization['system_version']."
    📲 آی‌پی‌آیدی : ".$authorization['api_id']."
    📲اسم برنامه : ".$authorization['app_name']."
    📲 نسخه برنامه: ".$authorization['app_version']."
    📲 تاریخ ایجاد: ".date("Y-m-d H:i:s",$authorization['date_active'])."
    📲 تاریخ فعال: ".date("Y-m-d H:i:s",$authorization['date_active'])."
    📲 آی‌پی: ".$authorization['ip']."
    📲 کشور: ".$authorization['country']."
    📲 منطقه: ".$authorization['region']."
    \n━─┄┄┄┄┄┄┄┄┄┄┄─━\n";
    }
    $this->messages->sendMessage(peer: $peer, message: $res, reply_to_msg_id: $messageId, parse_mode: 'markdown');
    }
    
    
    
elseif ($msgAs == 'stats' or $msgAs == 'آمار'){
    $this->messages->sendMessage(peer: $peer, message: '⏳در حال پردازش . . .', reply_to_msg_id: $messageId);
    $supergps = 0;
    $channels = 0;
    $pvs  = 0;
    $gps  = 0;
    $bots = 0;
    $s = $this->getDialogs();
    foreach ($s as $p) {
        try {
            $i = $this->getInfo($p);
            if($i['type'] == 'supergroup')
                $supergps++;
            elseif($i['type'] == 'channel')
                $channels++;
            elseif($i['type'] == 'user')
                $pvs++;
            elseif($i['type'] == 'chat')
                $gps++;
            elseif($i['type'] == 'bot')
                $bots++;
        } catch(\Throwable $e){
            //nothing yet
        }
    }
    $contacts = count($this->contacts->getContactIDs());
    $mem      = round(memory_get_peak_usage(true) / 1021 / 1024, 2);
    $load     = sys_getloadavg()[0];
    $answer   = "⇢  𝐒𝐞𝐥𝐟 𝑺𝒕𝒂𝒕𝒔 ⇠\n━─┄┄┄┄┄┄┄┄┄┄┄─━\n👥 سوپرگروه ها : $supergps\n━─┄┄┄┄┄┄┄┄┄┄┄─━\n👤 گروه ها : $gps\n━─┄┄┄┄┄┄┄┄┄┄┄─━\n📣 کانال ها : $channels\n━─┄┄┄┄┄┄┄┄┄┄┄─━\n🔐 پیوی ها : $pvs\n━─┄┄┄┄┄┄┄┄┄┄┄─━\n🤖 ربات ها : $bots\n━─┄┄┄┄┄┄┄┄┄┄┄─━\n📞 مخاطبین : $contacts\n━─┄┄┄┄┄┄┄┄┄┄┄─━\n♻️ مصرف مموری : $mem مگابایت\n━─┄┄┄┄┄┄┄┄┄┄┄─━\n🔋 پینگ : $load";
    $this->messages->sendMessage(peer: $peer, message: $answer);
}
    //==========//
   //==========//

elseif (preg_match("/^[#!\/]?(autoforadmin) (on|off)$/i", $msgAs, $mch)) {
           if (preg_match("/on/i", $mch[2])) {
            file_put_contents("data/autoforadmin.txt","on");
            $this->messages->sendMessage(peer: $peer, reply_to_msg_id: $messageId, message: "فروارد به ادمین با موفقیت روشن شد✅", parse_mode: "html");
           }else{
            file_put_contents("data/autoforadmin.txt","off");
            $this->messages->sendMessage(peer: $peer, reply_to_msg_id: $messageId, message: "فروارد به ادمین با موفقیت خاموش شد✅", parse_mode: "html");
           }
           }

//============== Time On | Off ===============
elseif (preg_match("/^[\/\#\!]?(timeb|time bio) (.*)$/i", $msgAs, $text1)) {
$timehow = $text1[2];
file_put_contents('timebio.txt', $timehow);
$this->messages->sendMessage(peer: $peer,id: $messageId,message: "⟩••• ᴛʜᴇ ᴛɪᴍᴇ ʙɪᴏ ɴᴏᴡ ɪs $timehow");
}

elseif (preg_match("/^[\/\#\!]?(timen|time name) (.*)$/i", $msgAs, $text1)) {
$timehow = $text1[2];

file_put_contents('timename.txt', $timehow);
$this->messages->sendMessage(peer: $peer,id: $messageId,message: "⟩••• ᴛʜᴇ ᴛɪᴍᴇ ɴᴀᴍᴇ ɴᴏᴡ ɪs $timehow");
}
       //==========// //==========//     
   
elseif (preg_match("/^[\/\#\!]?(fontime|ftime) (.*)$/i", $msgAs, $text1)) {
$font = $text1[2];
if($font < 1 or $font > 11){
$this->messages->sendMessage(peer: $peer, reply_to_msg_id: $messageId, message: 'خطا 😐 باید عدد بین 1 تا 11 باشد', parse_mode: 'MarkDown');
} else {

file_put_contents('fontext.txt', $font);
$this->messages->sendMessage(peer: $peer, message: "فونت $font با موفقیت تنظیم شد ✅", reply_to_msg_id: $replyToId);
}
}

elseif ($msgAs == '/allfont' or $msgAs == 'فونت ها'){
$this->messages->sendMessage(peer: $peer, message: "✞ فــونــت ها بــه شــڪــل زیــر مــے بــاشــنــد 

1➱: 𝟎,𝟏,𝟐,𝟑,𝟒,𝟓,𝟔,𝟕,𝟖,𝟗
━─┄┄┄┄┄┄┄┄┄┄┄─━
2➱: ⁰,¹,²,³,⁴,⁵,⁶,⁷,⁸,⁹
━─┄┄┄┄┄┄┄┄┄┄┄─━
3➱: 𝟘,𝟙,𝟚,𝟛,𝟜,𝟝,𝟞,𝟟,𝟠,𝟡
━─┄┄┄┄┄┄┄┄┄┄┄─━
4➱: 0҉ ҉,1҉ ҉,2҉ ҉,3҉ ҉,4҉ ҉,5҉ ҉,6҉ ҉,7҉ ҉,8҉ ҉,9҉
━─┄┄┄┄┄┄┄┄┄┄┄─━
5➱: ⊘,𝟙,ϩ,Ӡ,५,Ƽ,Ϭ,7,𝟠,९
━─┄┄┄┄┄┄┄┄┄┄┄─━
6➱: 0‌ ‌,1‌ ‌,2‌ ‌,3‌ ‌,4‌ ‌,5‌ ‌,6‌ ‌,7‌ ‌,8‌ ‌,9‌
━─┄┄┄┄┄┄┄┄┄┄┄─━
7➱: 0‌ ‌,1‌ ‌,2‌ ‌,3‌ ‌,4‌ ‌,5‌ ‌,6‌ ‌,7‌ ‌,8‌ ‌,9‌
━─┄┄┄┄┄┄┄┄┄┄┄─━
8➱: 0‌ ‌,1‌ ‌,2‌ ‌,3‌ ‌,4‌ ‌,5‌ ‌,6‌ ‌,7‌ ‌,8‌ ‌,9‌
━─┄┄┄┄┄┄┄┄┄┄┄─━
9➱: 0‌ ‌,1‌ ‌,2‌ ‌,3‌ ‌,4‌ ‌,5‌ ‌,6‌ ‌,7‌ ‌,8‌ ‌,9‌
━─┄┄┄┄┄┄┄┄┄┄┄─━
10➱: Ѳ,➀,❷,➂,❹,❺,❻,➆,➇,➈
━─┄┄┄┄┄┄┄┄┄┄┄─━
");
 } 
        
       
        
        
        
        
        
        
        } //end if admin
        

       
    }
}

$settings = new Settings;
$settings->getLogger()->setLevel(Logger::LEVEL_ULTRA_VERBOSE);
$settings->setAppInfo((new \danog\MadelineProto\Settings\AppInfo)
    ->setApiId(29779042)
    ->setApiHash('e276321f9c0fe5298b9a6b32157d1b8d')
);
// You can also use Redis, MySQL or PostgreSQL
// $settings->setDb((new Redis)->setDatabase(0)->setPassword('pony'));
// $settings->setDb((new Postgres)->setDatabase('MadelineProto')->setUsername('daniil')->setPassword('pony'));
// $settings->setDb((new Mysql)->setDatabase('MadelineProto')->setUsername('daniil')->setPassword('pony'));

// Reduce boilerplate with new wrapper method.
// Also initializes error reporting, catching and reporting all errors surfacing from the event loop.
MyEventHandler::startAndLoop('uwu.madeline', $settings);
