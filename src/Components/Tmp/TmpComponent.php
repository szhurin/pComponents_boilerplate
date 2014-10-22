<?php
 /**
 * TmpComponent - description
 *
 * @author automatic generation tool
 */

namespace Components\Tmp;

class TmpComponent extends Component 
{

    public function attach()  {
        
        $this->setExport('tmp', 'tmp text');
    }
    public function init()  { }
}
