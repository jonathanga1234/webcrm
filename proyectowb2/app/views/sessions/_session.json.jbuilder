json.extract! session, :id, :users_id, :token, :created_at, :updated_at
json.url session_url(session, format: :json)
