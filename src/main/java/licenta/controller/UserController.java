package licenta.controller;

import licenta.dto.UserDto;
import licenta.entity.User;
import licenta.mapper.UserMapper;
import licenta.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class UserController {

    @Autowired
    UserMapper mapper;
    @Autowired
    UserService service;

    @PostMapping("/login")
    public ResponseEntity<Boolean> login(@RequestBody UserDto user) {
        User mappedUser = mapper.userDtoToUserEntity(user);
        return ResponseEntity.ok(service.login(mappedUser));
    }

    @PostMapping("/register")
    public ResponseEntity<Boolean> register(@RequestBody UserDto user) {
        User mappedUser = mapper.userDtoToUserEntity(user);
        service.register(mappedUser);
        return ResponseEntity.ok(service.login(mappedUser));
    }

}
