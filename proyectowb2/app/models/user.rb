class User < ApplicationRecord

	before_create :hash_clave

	private
	def hash_clave
		require 'digest/md5'

		self.clave=Digest::MD5.hexdigest(clave)
end
end
