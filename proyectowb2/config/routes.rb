Rails.application.routes.draw do
 
  resources :tickets
  resources :reuniones
  resources :contactos
resources:sessions


 post '/cliente/', to: 'clientes#create'



 post '/contactos/', to: 'contactos#create'




     post '/reuniones/', to: 'reuniones#create'

          post '/tickets/', to: 'tickets#create'


  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
