package licenta.mapper;

import licenta.dto.ElectionDto;
import licenta.entity.Elections;
import org.mapstruct.Mapper;

@Mapper(componentModel = "spring")
public interface ElectionMapper {
    ElectionDto electionToElectionDto(Elections elections);
}
