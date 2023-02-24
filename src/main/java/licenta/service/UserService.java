package licenta.service;

import licenta.dao.UserDao;
import licenta.entity.User;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class UserService {
    @Autowired
    private UserDao userDao;

    public boolean login(User user){
        User foundUser = userDao.findByUserNameAndPassword(user);
        return foundUser != null;
    }

    public User findByUserName(String userName){
        return userDao.findByUserName(userName);
    }

    public void saveUser(User user){
        userDao.save(user);
    }

    public User register(User user) {
        return userDao.save(user);
    }
}
