<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{
    public function index(){
        $this->loadComponent('Paginator');
        $users = $this->Paginator->paginate($this->Users->find());
        $this->set(compact('users'));
    }

    public function view($id = null){
        $user = $this->Users->findById($id)->firstOrFail();
        $this->set(compact('user'));
    }

    public function add(){
        $user = $this->Users->newEntity();

        if($this->request->is('post')){
            //debug($this->request->data);
            $user = $this->Users->patchEntity($user, $this->request->data);

            if($this->Users->save($user)){
                $this->Flash->success('Usuario creado correctamente');
                return $this->redirect(['controller' => 'Users', 'action' => 'index']);
            }
            else{
                $this->Flash->error('Error al crear usuario');
            }
        }

        $this->set(compact('user'));
    }

    public function edit($id)
    {
        $user = $this->Users->findById($id)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario actualizado'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un error al actualizar usuario'));
        }

        $this->set(compact('user'));
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->findById($id)->firstOrFail();
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('El Usuario {0} ha sido borrado', $user->first_name));
            return $this->redirect(['action' => 'index']);
        }
    }
}
