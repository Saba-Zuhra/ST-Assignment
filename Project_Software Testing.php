<?php
use applitools/eyes.sdk.php;
include_once '../applitools/applitools'
class softwaretestingproject{
    protected $oururl='https://web.facebook.com/campaign/landing.php?campaign_id=1653377901&extra_1=s%7Cc%7C318307045135%7Ce%7Cfacebook%27%7C&placement&creative=318307045135&keyword=facebook%27&partner_id=googlesem&extra_2=campaignid%3D1653377901%26adgroupid%3D65139789042%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-362360550869%26loc_physical_ms%3D1011080%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAiAs8acBhA1EiwAgRFdw3TdDHXf7O8DMAJ2PZPBItbmzmiV4DhpQDQoscL1WWoRNmyyy7t5hRoCzfMQAvD_BwE&_rdc=1&_rdr';
    public $webdriver;
    public function test1()
    {
        //open a mozilla browser
        $capabilities= array(WebDriverCapabiltiyType::BROWSER_NAME = > 'mozilla');
        $this-> webdriver = RemoteWebDriver :: create ('hhtp://localhost:4444/wd/hub')
        $this -> webdriver->get($this->oururl);
        //initilaize the eyes SDK and set your prrivate API keys
        $eyes= new Eyes();
        $eyes-> setApiKey('1jgncgHghjghf6t123vgu63yu21vvbg7i8i6i567321fjhvu78i6127644y637iiygh12cvxcgy6868y75463425342435465476587698778675645wsxbvclkjkjfghdgze4567i8o767rtrersdfzvcbjkui56453twerasXvchg675847364eadzbhgkui7i564534wtedzcbvnbvmkjuy6758645364wedzcvhgti75645364weadzbxt56475364wead');
        try
        {
            $app_Name="software testing project";
            $test_Name="testing case - 1";
            //start the test and browsers viewpoint
            $eyes->open($this->webdriver, $app_Name, $test_Name,
            new RectangleSize (800, 600));

        // Visual checkpoint #1.
            $eyes->checkWindow("software testing ptoject!");

        // Click the "Click me!" button
        $this->webdriver->findElement (WebDriverBy::tagName("button"))->click();

    // Visual checkpoint #2.
    $eyes->checkWindow("Click!");

    // End the test.

    $eyes->close();
    } 
    finally 
    {
    // Close the browser.
    $this->webdriver->quit();
    $eyes->abortIfNotClosed();
    }
};

$test new softwaretestingproject();
$test->test1();
?>