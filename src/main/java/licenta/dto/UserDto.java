package licenta.dto;

import lombok.Data;

import javax.persistence.Column;

@Data
public class UserDto {

    private String userName;

    private String password;

    private String name;

    private String firstName;

    private String lastTName;

    private String tel;

    private String mail;
}
