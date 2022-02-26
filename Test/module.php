<?php

declare(strict_types=1);

class Test extends IPSModule {
	public function Create() {
		//Never delete this line!
		parent::Create();
	}

	public function Destroy() {
		//Never delete this line!
		parent::Destroy();
	}

	public function ApplyChanges() {
		//Never delete this line!
		parent::ApplyChanges();
	}

	/**
     * This function will be available automatically after the module is imported with the module control.
     * Using the custom prefix this function will be callable from PHP and JSON-RPC through:.
     *
     * TEST_Update($id);
     */
    public function Update() {

        $this->SendDebug(__FUNCTION__, '');
	}
}
