package licenta.dao;

import licenta.entity.User;
import licenta.entity.repo.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class UserDao {

    @Autowired
    UserRepository userRepository;

    public List<User> getALL() {
        return (List<User>) userRepository.findAll();
    }
    public User findByUserNameAndPassword(User user){
        return userRepository.findByUserNameAndPassword(user.getUserName(),user.getPassword());
    }

    public User findByUserName(String userName){
        return userRepository.findByUserName(userName);
    }

    public void save (User user){
        userRepository.save(user);
    }

}
