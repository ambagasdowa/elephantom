<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Xmf Controller
 *
 * @property \App\Model\Table\XmfTable $Xmf
 *
 * @method \App\Model\Entity\Xmf[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class XmfController extends AppController
{

  /**
  *    set a custom theme
  *    @param paper fix
  */

  public function beforeRender (\Cake\Event\Event $event) {
    // NOTE choose a theme
    $this->viewBuilder()->theme('Paper');
    // OR
    // $this->viewBuilder()->theme('AdminLTE');
    // NOTE choose a theme
  }



    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($id = null)
    {

        $xmf_index =  $id;
        debug($xmf_index);
        $xmf = $this->paginate($this->Xmf);
        $this->set(compact('xmf','xmf_index'));
    }

    /**
     * View method
     *
     * @param string|null $id Xmf id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $xmf = $this->Xmf->get($id, [
            'contain' => []
        ]);

        $this->set('xmf', $xmf);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $xmf = $this->Xmf->newEntity();
        if ($this->request->is('post')) {
            $xmf = $this->Xmf->patchEntity($xmf, $this->request->getData());
            if ($this->Xmf->save($xmf)) {
                $this->Flash->success(__('The xmf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The xmf could not be saved. Please, try again.'));
        }
        $this->set(compact('xmf'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Xmf id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $xmf = $this->Xmf->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $xmf = $this->Xmf->patchEntity($xmf, $this->request->getData());
            if ($this->Xmf->save($xmf)) {
                $this->Flash->success(__('The xmf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The xmf could not be saved. Please, try again.'));
        }
        $this->set(compact('xmf'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Xmf id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $xmf = $this->Xmf->get($id);
        if ($this->Xmf->delete($xmf)) {
            $this->Flash->success(__('The xmf has been deleted.'));
        } else {
            $this->Flash->error(__('The xmf could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
