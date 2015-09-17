<?php
/**
 * @package     FOF
 * @copyright   2010-2015 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license     GNU GPL version 2 or later
 */

namespace FOF30\Generator\Command;

use FOF30\Generator\Command\Command as Command;

class Help extends Command
{
	public function execute($composer, $input)
    {
		$this->out("");
		$this->out(str_repeat('-', 79));
		$this->out("FOF3 Generator Usage:");
		$this->out("fof init: Initialize a component");
		$this->out("fof generate defaultview <view>: Create the backend form.default.xml file for the given view");
		$this->out("fof generate formview <view>: Create the backend form.form.xml file for the given view");
		$this->out("fof generate itemview <view>: Create the backend form.item.xml file for the given view");
		$this->out("fof generate views <view>: Create all 3 backend view types for the given view");
		$this->out("fof generate defaultview <view> --frontend: Create the frontend form.default.xml file for the given view");
		$this->out("fof generate formview <view> --frontend: Create the frontend form.form.xml file for the given view");
		$this->out("fof generate itemview <view> --frontend: Create the frontend form.item.xml file for the given view");
		$this->out("fof generate views <view> --frontend: Create all 3 frontend view types for the given view");
		$this->out("fof setdevserver: Set the dev server location");
		$this->out("fof help: Show this help");
		$this->out(str_repeat('-', 79));
		$this->out("");

        /*
         * fof generate --name foobars --controller
         * fof generate --name foobars --model
         * fof generate --name foobars --view
         * fof generate --name foobars --mvc
         *
         * fof generate --name foobars --layout item
         * fof generate --name foobars --layout
         */
	}
}