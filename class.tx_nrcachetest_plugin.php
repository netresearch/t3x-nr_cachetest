<?php
class tx_nrcachetest_plugin extends TYPO3\CMS\Frontend\Plugin\AbstractPlugin
{
    public function render($type)
    {
        $this->pi_initPIflexForm();
        $nSleep = intval(
            $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'sleep')
        );
        $sleeptext = '';
        if ($nSleep > 0) {
            sleep($nSleep);
            $sleeptext = 'sleeping ' . $nSleep . " seconds<br/>\n";
        }

        return $sleeptext
            . $type . " plugin<br/>\n"
            . microtime(true) . "<br/>\n"
            . date('Y-m-d H:i:s') . "<br/>\n";
    }
}

class tx_nrcachetest_cached extends tx_nrcachetest_plugin
{
    public function main()
    {
        return $this->render('cached');
    }
}

class tx_nrcachetest_uncached extends tx_nrcachetest_plugin
{
    public function main()
    {
        return $this->render('uncached');
    }
}
?>
