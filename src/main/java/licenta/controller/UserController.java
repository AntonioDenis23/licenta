package licenta.controller;

import licenta.dto.UserDto;
import licenta.entity.User;
import licenta.mapper.UserMapper;
import licenta.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;
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
    public ResponseEntity<UserDto> register(@RequestBody UserDto user) {
        User mappedUser = mapper.userDtoToUserEntity(user);
        User savedUser = service.register(mappedUser);
        HttpStatus status = HttpStatus.OK;
        if(savedUser == null)
        {
            status = HttpStatus.ALREADY_REPORTED;
        }
        return new ResponseEntity<>(mapper.userEntityToUserDto(savedUser),status);

    }

    @GetMapping("/user")
    public ResponseEntity<UserDto> getUser(@RequestParam String userName) {
        User user = service.findByUserName(userName);
        UserDto userDto = mapper.userEntityToUserDto(user);
        user.setPassword(null);
        return ResponseEntity.ok(userDto);
    }

}
