<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }

    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'user'){
            if(in_array($this->request->action, ['home', 'view', 'logout'])){
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else{
                $this->Flash->error('Datos Invalidos', ['key' => 'auth']);
            }
        }

        if($this->Auth->user()){
            return $this->redirect(['controller' => 'Users', 'action' => 'home']);
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function home(){
        $this->render();
    }

    public function index(){
        $this->loadComponent('Paginator');
        $users = $this->Paginator->paginate($this->Users->find());
        $this->set(compact('users'));
    }

    public function view($id){
        $user = $this->Users->findById($id)->firstOrFail();
        $this->set(compact('user'));
    }

    public function add(){
        $user = $this->Users->newEntity();

        if($this->request->is('post')){
            //debug($this->request->data);
            $user = $this->Users->patchEntity($user, $this->request->data);

            $user->role = 'user';
            $user->active = 1;

            if($this->Users->save($user)){
                $this->Flash->success('Usuario creado correctamente');
                $user = $this->Auth->identify();
                if($user){
                    $this->Auth->setUser($user);
                    return $this->redirect(['controller' => 'Users', 'action' => 'home']);
                }
                else{
                    return $this->redirect(['controller' => 'Users', 'action' => 'login']);
                }
                
            }
            else{
                $this->Flash->error('Error al crear usuario');
            }
        }

        $this->set(compact('user'));
    }

    public function edit($id)
    {
        $user = $this->Users->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) 
        {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) 
            {
                $this->Flash->success(__('Usuario actualizado'));
                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error(__('Ocurrio un error al actualizar usuario'));
            }
        }

        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) 
        {
            $this->Flash->success(__('El Usuario {0} ha sido eliminado', $user->first_name));
        }
        else
        {
            $this->Flash->error(__('Ha ocurrido un error. El Usuario {0} no ha sido eliminado', $user->first_name));
        }
        return $this->redirect(['action' => 'index']);
    }
}
