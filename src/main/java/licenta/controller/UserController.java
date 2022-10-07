package licenta.controller;

import licenta.entity.User;
import licenta.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class UserController {

    @Autowired
    UserService service;

    @PostMapping("/login")
    public ResponseEntity<Boolean> login(@RequestBody User user) {

        return ResponseEntity.ok(service.login(user));
    }

}
