<?php

class homepage extends controller
{
	function initialize()
	{
		$this->_set_title(language::translate(__CLASS__,
                                              "home page title"));

        ob_start();
        ?>
        <div class="notes">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis pretium turpis, eget varius ipsum sodales quis. Nunc a dictum libero. Nulla quis mattis nulla. Pellentesque placerat, lorem et tristique rhoncus, neque nibh vulputate ipsum, nec dignissim nisi nisi nec orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce urna elit, faucibus non dapibus sed, pretium a ipsum. Etiam ac erat nec tellus vulputate congue a at mauris. Cras sem enim, feugiat at egestas et, viverra eu leo. Phasellus nec felis purus, vel ullamcorper augue. Sed nec urna magna, eu fermentum dui. Sed velit eros, lacinia venenatis consequat eget, dapibus sit amet eros. Aenean nibh velit, viverra vel fermentum at, aliquet sed massa. Sed eget mauris felis. Proin vestibulum aliquam ullamcorper.
		</div>
        <?php
        $this->_set_aside(ob_get_clean());

        $this->_handler();
	}

	private function _handler()
	{
		$this->_set_nav(navigator::render_ul());
	}
}

?>