<?php
class MakesController extends AppController {

	var $name = 'Makes';
	var $scaffold;

    var $helpers = array('Paginator');

    public function add()
    {

        if ( $this->data ) {
            $this->Make->create () ;

            if ( $this->Make->save( $this->data ) ) {
                $this->redirect('index');
            }

        }

    }

    public function index()
    {
        $this->set( 'makes', $this->paginate() );
    }

    public function edit($id = null)
    {
	    $this->Make->id = $id;

	    if ( empty( $this->data) ) {
		    $this->data = $this->Make->read();
	    } else {
		    if ( $this->Make->save( $this->data ) ) {
			    $this->Session->setFlash('Your make has been updated.');
			    $this->redirect( array( 'action' => 'index' ) );
		    }
	    }
    }

    public function view($id = null)
    {
        $this->Make->id = $id;
        $this->set('make', $this->Make->read());
    }

}
